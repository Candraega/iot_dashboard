{{-- resources/views/dashboard/index.blade.php --}}
@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
{{-- Page title --}}
@include('layouts.shared/page-title', ['subtitle' => 'Admin', 'title' => 'Suhu'])
 <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

{{-- Stats cards --}}
<div class="grid xl:grid-cols-4 md:grid-cols-2 gap-5 mb-5">
      
            <button id="startAlarmBtn" class="btn btn-danger mb-3">Aktifkan Alarm Suara</button>
        <audio id="alarmSound" src="/sounds/alarm.mp3" preload="auto"></audio>
    
    {{-- Total Kartu --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">
                    Today
                </span>
                <h5 class="card-title truncate">Total Cards</h5>
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


    <div class="card">
        <div class="card-body">
            <div class="mb-4">

                <span class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">
                    Today
                </span>
                <h5 class="card-title truncate">Status Api</h5>
            </div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800" id="flame-status">
                    @if(isset($latest) && $latest->flame_detected)
                        🔥 Api
                    @else
                        ✅ Aman
                    @endif
                </h2>
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



    {{-- Market Revenue --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span
                    class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">Daily</span>
                <h5 class="card-title truncate">Average Temperature</h5>
            </div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-medium text-default-800">
                    {{ optional($latest)->temperature ?? 'Data tidak tersedia' }} °C
                </h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">10%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>
            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center rounded-full bg-danger" style="width: 10}%;" role="progressbar"
                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    {{-- Expenses --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <span
                    class="px-1 py-0.5 text-[10px]/[1.25] font-semibold rounded text-success bg-success/20 float-end">Per
                    Month</span>
                <h5 class="card-title truncate">humidity</h5>
            </div>
            <div class="flex items-center justify-between mb-4">
                <h2 id="humidity" class="text-3xl font-medium text-default-800">
                    {{ optional($latest)->humidity ?? 'Data tidak tersedia' }} %
                </h2>
                <span class="flex items-center">
                    <span class="text-default-400 text-sm">50%</span>
                    <i class="i-tabler-arrow-up text-success text-base ms-2"></i>
                </span>
            </div>
            <div class="flex w-full h-1.5 bg-default-200 rounded-full overflow-hidden shadow-sm">
                <div class="flex flex-col justify-center rounded-full bg-warning" style="width: 50%;" role="progressbar"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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

        <!-- Modal Deteksi Api -->
        <div id="apiModal" class="fixed inset-0 bg-red-600 bg-opacity-90 flex items-center justify-center z-50 hidden">
            <div class="bg-red-700 text-white rounded-lg shadow-lg p-8 text-center relative">
                <button id="closeModalBtn" class="absolute top-2 right-2 text-white text-2xl font-bold hover:text-gray-300">&times;</button>
                <h2 class="text-4xl font-bold mb-4">🔥 API TERDETEKSI!</h2>
                <p class="text-lg">Segera ambil tindakan keamanan.</p>
            </div>
        </div>


                @if($data->isNotEmpty())
            <div class="mt-10">
                <h4 class="text-xl font-semibold mb-2">Grafik Suhu</h4>
                <canvas id="temperatureChart" height="100"></canvas>
            </div>

            <div class="mt-10">
                <h4 class="text-xl font-semibold mb-2">Grafik Kelembaban</h4>
                <canvas id="humidityChart" height="100"></canvas>
            </div>

<div class="card overflow-hidden">
    <div class="card-header">
        <h4 class="card-title">Riwayat Data</h4>
    </div>
                   <div class="overflow-x-auto custom-scroll">
        <table class="w-full text-sm text-left text-default-500" id="card-table">
            <thead class="text-xs text-default-700 uppercase bg-default-50 border-b">
                            <tr>
                                <th class="px-4 py-2 text-left">Waktu</th>
                                <th class="px-4 py-2 text-left">Suhu (°C)</th>
                                <th class="px-4 py-2 text-left">Kelembaban (%)</th>
                                <th class="px-4 py-2 text-left">Api</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach($data as $item)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $item->created_at }}</td>
                                    <td class="px-4 py-2">{{ $item->temperature }}</td>
                                    <td class="px-4 py-2">{{ $item->humidity }}</td>
                                    <td class="px-4 py-2">{{ $item->flame_detected ? '🔥' : '✅' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p class="text-gray-500 mt-6">Belum ada data yang tersedia.</p>
        @endif




<br>

{{-- Daftar Kartu RFID --}}
<div class="card overflow-hidden">
    <div class="card-header">
        <h4 class="card-title">Daftar Kartu RFID</h4>
    </div>
    <div class="overflow-x-auto custom-scroll">
        <table class="w-full text-sm text-left text-default-500" id="card-table">
            <thead class="text-xs text-default-700 uppercase bg-default-50 border-b">
                <tr>
                    <th class="px-6 py-3">UID</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Phone</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Aksi</th>
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
                                    <button class="btn btn-sm btn-success">Simpan</button>
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
                                    <button class="btn btn-sm btn-danger">Hapus</button>
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


    <script>
        let temperatureChart, humidityChart;
        let apiPreviouslyDetected = false;
        let alarmSound = document.getElementById('alarmSound');
        let alarmReady = false;

        const modal = document.getElementById('apiModal');
        const closeModalBtn = document.getElementById('closeModalBtn');

        closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
        modal.addEventListener('click', (e) => { if (e.target === modal) modal.classList.add('hidden'); });

        document.getElementById('startAlarmBtn').addEventListener('click', function () {
            alarmSound.play().then(() => {
                alarmSound.pause();
                alarmSound.currentTime = 0;
                alarmReady = true;
                this.style.display = 'none';
                alert('Alarm suara siap diputar!');
            }).catch(e => console.log('Audio play error:', e));
        });

        function fetchLatestData() {
            $.get('/api/latest', function (data) {
                $('#temperature').text(data.temperature + ' °C');
                $('#humidity').text(data.humidity + ' %');
                $('#flame-status').html(data.flame_detected ? '🔥 Api' : '✅ Aman');

                if (data.flame_detected && !apiPreviouslyDetected) {
                    modal.classList.remove('hidden');
                    if (alarmReady) alarmSound.play().catch(e => console.log("Autoplay blocked", e));
                } else if (!data.flame_detected && apiPreviouslyDetected) {
                    modal.classList.add('hidden');
                    alarmSound.pause();
                    alarmSound.currentTime = 0;
                }
                apiPreviouslyDetected = data.flame_detected;
            });
        }

        function updateCharts() {
            $.get('/api/last-n/20', function (data) {
                const labels = data.map(item => new Date(item.created_at).toLocaleTimeString('id-ID'));
                const temperatures = data.map(item => item.temperature);
                const humidities = data.map(item => item.humidity);

                temperatureChart.data.labels = labels;
                temperatureChart.data.datasets[0].data = temperatures;
                temperatureChart.update();

                humidityChart.data.labels = labels;
                humidityChart.data.datasets[0].data = humidities;
                humidityChart.update();
            });
        }

        function createCharts(initialData) {
            const labels = initialData.map(item => new Date(item.created_at).toLocaleTimeString('id-ID'));
            const temperatures = initialData.map(item => item.temperature);
            const humidities = initialData.map(item => item.humidity);

            const ctxTemp = document.getElementById('temperatureChart').getContext('2d');
            temperatureChart = new Chart(ctxTemp, {
                type: 'line',
                data: {
                    labels,
                    datasets: [{
                        label: 'Suhu (°C)',
                        data: temperatures,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        tension: 0.3,
                        fill: true,
                        pointRadius: 3
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: { display: true, text: 'Tren Suhu' }
                    },
                    scales: {
                        y: { beginAtZero: true, title: { display: true, text: 'Suhu (°C)' } },
                        x: { title: { display: true, text: 'Waktu' } }
                    }
                }
            });

            const ctxHum = document.getElementById('humidityChart').getContext('2d');
            humidityChart = new Chart(ctxHum, {
                type: 'line',
                data: {
                    labels,
                    datasets: [{
                        label: 'Kelembaban (%)',
                        data: humidities,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        tension: 0.3,
                        fill: true,
                        pointRadius: 3
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: { display: true, text: 'Tren Kelembaban' }
                    },
                    scales: {
                        y: { beginAtZero: true, title: { display: true, text: 'Kelembaban (%)' } },
                        x: { title: { display: true, text: 'Waktu' } }
                    }
                }
            });
        }

        $(document).ready(function () {
            fetchLatestData();
            $.get('/api/last-n/20', function (initialData) {
                createCharts(initialData);
                setInterval(fetchLatestData, 5000);
                setInterval(updateCharts, 5000);
            });
        });
    </script>

@endsection

@section('script')
@vite(['resources/js/pages/dashboard.js'])
@endsection