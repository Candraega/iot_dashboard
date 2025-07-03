<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class DashboardController extends Controller
{
    public function index()
    {
        $data = SensorData::latest()->take(20)->get()->reverse();
        $latest = SensorData::latest()->first();
        return view('suhu', compact('data', 'latest'));
    }
    public function latest()
    {
        return response()->json(SensorData::latest()->first());
    }
}
