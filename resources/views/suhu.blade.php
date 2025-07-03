{{-- resources/views/dashboard/index.blade.php --}}
@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
{{-- Page title --}}
@include('layouts.shared/page-title', ['subtitle' => 'Admin', 'title' => 'Temperature'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Tombol Aktifkan Alarm -->
        <div class="text-left mb-4">
            <button id="startAlarmBtn" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">Enable Sound Alarm</button>
        </div>
        <audio id="alarmSound" src="/sounds/alarm.mp3" preload="auto"></audio>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-red-500 text-white rounded shadow p-6">
                <h5 class="text-xl font-semibold mb-2">Fire Status</h5>
                <p class="text-2xl" id="flame-status">
                    @if(isset($latest) && $latest->flame_detected)
                        🔥 Fire
                    @else
                        ✅ Safe
                    @endif
                </p>
            </div>
            <div class="bg-blue-400 text-white rounded shadow p-6">
                <h5 class="text-xl font-semibold mb-2">Temperature</h5>
                <p class="text-2xl" id="temperature">
                    {{ optional($latest)->temperature ?? 'Data tidak tersedia' }} °C
                </p>
            </div>
            <div class="bg-blue-600 text-white rounded shadow p-6">
                <h5 class="text-xl font-semibold mb-2">Humidity</h5>
                <p class="text-2xl" id="humidity">
                    {{ optional($latest)->humidity ?? 'Data tidak tersedia' }} %
                </p>
            </div>
        </div>

        <!-- Modal Deteksi Api -->
        <div id="apiModal" class="fixed inset-0 bg-red-600 bg-opacity-90 flex items-center justify-center z-50 hidden">
            <div class="bg-red-700 text-white rounded-lg shadow-lg p-8 text-center relative">
                <button id="closeModalBtn" class="absolute top-2 right-2 text-white text-2xl font-bold hover:text-gray-300">&times;</button>
                <h2 class="text-4xl font-bold mb-4">🔥 FIRE DETECTED!</h2>
                <p class="text-lg">Take security measures immediately.</p>
            </div>
        </div>

        @if($data->isNotEmpty())
            <div class="mt-10">
                <h4 class="text-xl font-semibold mb-2">Temperature Chart</h4>
                <canvas id="temperatureChart" height="100"></canvas>
            </div>

            <div class="mt-10">
                <h4 class="text-xl font-semibold mb-2">Humidity Chart</h4>
                <canvas id="humidityChart" height="100"></canvas>
            </div>
<div class="text-ledt mb-4">
    <a href="{{ url('/export') }}" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
        📥 Export Excel
    </a>
</div>

<div class="card overflow-hidden">
    <div class="card-header">
        <h4 class="card-title">Data History</h4>
    </div>
                   <div class="overflow-x-auto custom-scroll">
        <table class="w-full text-sm text-left text-default-500" id="card-table">
            <thead class="text-xs text-default-700 uppercase bg-default-50 border-b">
                            <tr>
                                <th class="px-4 py-2 text-left">Time</th>
                                <th class="px-4 py-2 text-left">Temperature (°C)</th>
                                <th class="px-4 py-2 text-left">Humidity (%)</th>
                                <th class="px-4 py-2 text-left">Fire</th>
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
            <p class="text-gray-500 mt-6">No data available yet.</p>
        @endif
    </div>

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
                alert('Sound alarm ready to play!');
            }).catch(e => console.log('Audio play error:', e));
        });

        function fetchLatestData() {
            $.get('/api/latest', function (data) {
                        const flameDetected = parseInt(data.flame_detected) === 1;

                $('#temperature').text(data.temperature + ' °C');
                $('#humidity').text(data.humidity + ' %');
                $('#flame-status').html(data.flame_detected ? '🔥 Fire' : '✅ Safe');

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
                        title: { display: true, text: 'Temperature Trends' }
                    },
                    scales: {
                        y: { beginAtZero: true, title: { display: true, text: 'Temperatures (°C)' } },
                        x: { title: { display: true, text: 'Time' } }
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
                        title: { display: true, text: 'Humidity trends' }
                    },
                    scales: {
                        y: { beginAtZero: true, title: { display: true, text: 'Humidity (%)' } },
                        x: { title: { display: true, text: 'Time' } }
                    }
                }
            });
        }

        $(document).ready(function () {
            fetchLatestData();
            $.get('/api/last-n/20', function (initialData) {
                createCharts(initialData);
                setInterval(fetchLatestData, 2000);
                setInterval(updateCharts, 2000);
            });
        });
    </script>
</html>

@endsection

@section('script')
@vite(['resources/js/pages/dashboard.js'])
@endsection