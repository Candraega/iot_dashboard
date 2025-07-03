{{-- resources/views/dashboard/index.blade.php --}}
@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
{{-- Page title --}}
@include('layouts.shared/page-title', ['subtitle' => 'Admin', 'title' => 'RFID'])

{{-- Stats cards --}}
<div class="grid xl:grid-cols-4 md:grid-cols-2 gap-5 mb-5">
      

    {{-- Total Kartu --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">
                    Today
                </span>
                <h5 class="card-title truncate">Cards Total</h5>
            </div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">{{ $total }}</h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">+{{ $todayPercent }}%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>
            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center rounded-full bg-primary" style="width: {{ $todayPercent }}%;"
                    role="progressbar" aria-valuenow="{{ $todayPercent }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>




    {{-- Daily Visits --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span
                    class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">All
                    Time</span>
                <h5 class="card-title truncate">Daily Visits</h5>
            </div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">60</h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">60%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>
            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center rounded-full bg-success" style="width: 60%;" role="progressbar"
                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>




<br>
{{-- Daftar Kartu RFID --}}
<div class="card overflow-hidden">
    <div class="card-header">
        <h4 class="card-title">RFID Card List</h4>
    </div>
    <div class="overflow-x-auto custom-scroll">
        <table class="w-full text-sm text-left text-default-500" id="card-table">
            <thead class="text-xs text-default-700 uppercase bg-default-50 border-b">
                <tr>
                    <th class="px-6 py-3">UID</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Phone</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-default-200">
                @foreach($cards as $card)
                    <tr class="hover:bg-default-50" data-uid="{{ $card->uid }}">
                        <td class="px-6 py-4">{{ $card->uid }}</td>

                        {{-- Nama --}}
                        <td class="px-6 py-4">
                            @if($card->status === 'unknown')
                                <form action="{{ url("rfid/{$card->id}/name") }}" method="POST" class="flex flex-wrap gap-2">
                                    @csrf
                                    <input name="name" class="form-input form-input-sm rounded border px-2 py-1 flex-1"
                                        placeholder="Isi nama" required>
                                    <input name="phone" class="form-input form-input-sm rounded border px-2 py-1 flex-1"
                                        placeholder="No. HP" required>
                                    <button class="btn btn-sm btn-success">Save</button>
                                </form>
                            @else
                                {{ $card->name }}
                            @endif
                        </td>

                        {{-- Phone --}}
                        <td class="px-6 py-4">
                            {{ $card->status === 'unknown' ? '-' : $card->phone }}
                        </td>

                        {{-- Status --}}
                        <td class="px-6 py-4">
                            <span class="badge text-white bg-{{ $card->status === 'unknown' ? 'secondary' : 'success' }}">
                                {{ ucfirst($card->status) }}
                            </span>
                        </td>

                        {{-- Aksi --}}
                        <td class="px-6 py-4">
                            @if($card->status !== 'unknown')
                                <form action="{{ url("rfid/{$card->id}") }}" method="POST" class="flex flex-wrap gap-2 mb-2">
                                    @csrf @method('PUT')
                                    <input name="name" value="{{ $card->name }}"
                                        class="form-input form-input-sm rounded border px-2 py-1 flex-1" required>
                                    <input name="phone" value="{{ $card->phone }}"
                                        class="form-input form-input-sm rounded border px-2 py-1 flex-1" required>
                                    <button class="btn btn-sm btn-warning">Update</button>
                                </form>
                                <form action="{{ url("rfid/{$card->id}") }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus kartu ini?')" class="inline-block">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- Script realtime polling --}}
<script>
    let knownUIDs = new Set(
        [...document.querySelectorAll('#card-table tbody tr')].map(tr => tr.dataset.uid)
    );

    function renderCardRow(card) {
        const isUnknown = card.status === 'unknown';
        const csrfToken = '{{ csrf_token() }}';

        return `<tr data-uid="${card.uid}">
            <td class="px-6 py-4">${card.uid}</td>
            <td class="px-6 py-4">
                ${isUnknown ? `
                    <form action="/rfid/${card.id}/name" method="POST" class="flex flex-wrap gap-2">
                        <input type="hidden" name="_token" value="${csrfToken}">
                        <input name="name" class="form-input form-input-sm rounded border px-2 py-1 flex-1" placeholder="Isi nama" required>
                        <input name="phone" class="form-input form-input-sm rounded border px-2 py-1 flex-1" placeholder="No. HP" required>
                        <button class="btn btn-sm btn-success">Simpan</button>
                    </form>
                ` : card.name}
            </td>
            <td class="px-6 py-4">${isUnknown ? '-' : (card.phone ?? '-')}</td>
            <td class="px-6 py-4">
                <span class="badge text-white bg-${isUnknown ? 'secondary' : 'success'}">${card.status.charAt(0).toUpperCase() + card.status.slice(1)}</span>
            </td>
            <td class="px-6 py-4">
                ${!isUnknown ? `
                    <form action="/rfid/${card.id}" method="POST" class="flex flex-wrap gap-2 mb-2">
                        <input type="hidden" name="_token" value="${csrfToken}">
                        <input type="hidden" name="_method" value="PUT">
                        <input name="name" value="${card.name}" class="form-input form-input-sm rounded border px-2 py-1 flex-1" required>
                        <input name="phone" value="${card.phone}" class="form-input form-input-sm rounded border px-2 py-1 flex-1" required>
                        <button class="btn btn-sm btn-warning">Update</button>
                    </form>
                    <form action="/rfid/${card.id}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kartu ini?')" class="inline-block">
                        <input type="hidden" name="_token" value="${csrfToken}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                ` : ''}
            </td>
        </tr>`;
    }

    function fetchCards() {
        fetch('/rfid/unknown-cards')
            .then(response => response.json())
            .then(data => {
                const tbody = document.querySelector('#card-table tbody');
                let newCount = 0;

                data.forEach(card => {
                    if (!knownUIDs.has(card.uid)) {
                        tbody.insertAdjacentHTML('afterbegin', renderCardRow(card));
                        knownUIDs.add(card.uid);
                        newCount++;
                    }
                });

                // Update total kartu
                document.getElementById('total-cards').textContent = knownUIDs.size;
            });
    }

    fetchCards(); // initial
    setInterval(fetchCards, 5000); // every 5 seconds
</script>



@endsection

@section('script')
@vite(['resources/js/pages/dashboard.js'])
@endsection