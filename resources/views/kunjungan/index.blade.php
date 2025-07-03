{{-- resources/views/dashboard/index.blade.php --}}
@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
{{-- Page title --}}
@include('layouts.shared/page-title', ['subtitle' => 'Admin', 'title' => 'Barrier Gate'])

<head>
    <meta charset="UTF-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

    <div class="container mx-auto px-4 py-8">

        {{-- Filter Tanggal --}}
        <form method="GET" class="mb-6 flex flex-col sm:flex-row gap-4 items-start sm:items-end">
            <div>
                <label for="start_date" class="block text-sm font-medium">From Date</label>
                <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}"
                    class="border border-gray-300 rounded px-3 py-2 w-full" />
            </div>
            <div>
                <label for="end_date" class="block text-sm font-medium">Until Date</label>
                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}"
                    class="border border-gray-300 rounded px-3 py-2 w-full" />
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
                Filter
            </button>
        </form>

        {{-- Card --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-700">Total Entry Vehicles</h2>
                <p id="totalKunjungan" class="text-3xl font-bold text-blue-600 mt-2">
                    {{ $kunjungans->sum('jumlah_kunjungan') }}
                </p>
            </div>
        </div>

        {{-- Chart --}}
        <div class="bg-white rounded shadow mb-8 p-6">
            <h2 class="text-lg font-bold mb-4">Visits Chart</h2>
            <canvas id="kunjunganChart" height="100"></canvas>
        </div>

        {{-- Tabel --}}
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full text-sm">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">#</th>
                        <th class="px-4 py-3 text-left">Total</th>
                        <th class="px-4 py-3 text-left">Time</th>
                        <th class="px-4 py-3 text-left">Object Entered</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($kunjungans->take(25) as $kunjungan)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $kunjungan->jumlah_kunjungan }}</td>
                            <td class="px-4 py-3">
                                {{ \Carbon\Carbon::parse($kunjungan->waktu)->format('d M Y H:i') }}
                            </td>
                            <td class="px-4 py-3">{{ $kunjungan->objek_masuk ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">There is no visit data yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('kunjunganChart').getContext('2d');

        let kunjunganChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Amount Visited',
                    data: [],
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    tension: 0.3,
                    fill: true,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 1 }
                    }
                }
            }
        });

        const totalCard = document.querySelector('#totalKunjungan');

        async function fetchData() {
            const startDate = document.querySelector('#start_date')?.value;
            const endDate = document.querySelector('#end_date')?.value;

            let url = '/api/kunjungan/chart-data';
            const params = new URLSearchParams();

            if (startDate && endDate) {
                params.append('start_date', startDate);
                params.append('end_date', endDate);
            }

            if (params.toString()) {
                url += '?' + params.toString();
            }

            try {
                const res = await fetch(url);
                const json = await res.json();

                kunjunganChart.data.labels = json.labels;
                kunjunganChart.data.datasets[0].data = json.data;
                kunjunganChart.update();

                if (totalCard) {
                    totalCard.textContent = json.total;
                }

            } catch (err) {
                console.error('Gagal memuat data chart:', err);
            }
        }

        // Load data awal dan update tiap 5 detik
        fetchData();
        setInterval(fetchData, 5000);
    </script>

</body>

</html>
@endsection

@section('script')
@vite(['resources/js/pages/dashboard.js'])
@endsection