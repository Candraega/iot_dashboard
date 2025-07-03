<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    // app/Http/Controllers/KunjunganController.php

    public function index(Request $request)
    {
        $query = Kunjungan::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('waktu', [$request->start_date, $request->end_date]);
        }

        $kunjungans = $query->orderBy('waktu', 'desc')->get();

        // Buat chart data per tanggal
        $grouped = $kunjungans->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->waktu)->format('Y-m-d');
        });

        $chartLabels = $grouped->keys();
        $chartData = $grouped->map(function ($items) {
            return $items->sum('jumlah_kunjungan');
        })->values();

        return view('kunjungan.index', compact('kunjungans', 'chartLabels', 'chartData'));
    }

    public function store(Request $request)
    {
        // Validasi data masuk
        $validated = $request->validate([
            'jumlah_kunjungan' => 'required|integer|min:1',
            'waktu' => 'required|date',
            'objek_masuk' => 'nullable|string|max:255',
        ]);

        // Simpan data kunjungan
        $kunjungan = Kunjungan::create($validated);

        return response()->json([
            'message' => 'Data kunjungan berhasil disimpan',
            'data' => $kunjungan,
        ], 201);
    }

    public function chartData(Request $request)
    {
        $query = Kunjungan::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('waktu', [$request->start_date, $request->end_date]);
        }

        $kunjungans = $query->orderBy('waktu', 'desc')->get();

        $grouped = $kunjungans->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->waktu)->format('Y-m-d');
        });

        $labels = $grouped->keys();
        $data = $grouped->map(fn($items) => $items->sum('jumlah_kunjungan'))->values();

        return response()->json([
            'labels' => $labels,
            'data' => $data,
            'total' => $kunjungans->sum('jumlah_kunjungan'),
        ]);
    }

}
