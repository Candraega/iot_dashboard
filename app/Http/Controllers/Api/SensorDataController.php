<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorDataController extends Controller
{
    public function store(Request $request)
    {
        $data = SensorData::create([
            'temperature' => $request->temperature,
            'humidity' => $request->humidity,
            'flame_detected' => $request->flame_detected
        ]);

        // Hapus data lama jika jumlah sudah lebih dari 500
        $totalRows = \App\Models\SensorData::count();
        if ($totalRows > 500) {
            $rowsToDelete = $totalRows - 400;
            \App\Models\SensorData::oldest()->take($rowsToDelete)->delete();
        }

        return response()->json(['status' => 'success']);
    }

    public function index()
    {
        return SensorData::latest()->take(20)->get();
    }
    public function lastN($count = 20)
    {
        return response()->json(
            SensorData::latest()->take($count)->get()->reverse()->values()
        );
    }
     public function latest()
    {
        $latest = SensorData::latest()->first();

        if (!$latest) {
            return response()->json([
                'temperature' => null,
                'humidity' => null,
                'flame_detected' => false,
                'created_at' => null,
            ]);
        }

        return response()->json([
            'temperature' => $latest->temperature,
            'humidity' => $latest->humidity,
            'flame_detected' => $latest->flame_detected,
            'created_at' => $latest->created_at,
        ]);
    }

}