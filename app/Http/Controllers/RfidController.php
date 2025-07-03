<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RfidCard;
use App\Services\MqttService;
use Carbon\Carbon;
use App\Models\SensorData;

class RfidController extends Controller
{
//     class RfidController extends Controller
// {
//     public function index()
//     {
//         return view('rfid.index', [
//             'cards' => RfidCard::latest()->get(),
//         ]);
//     }
    public function index()
    {
        // Data sensor
        $data = SensorData::latest()->take(20)->get()->reverse();
        $latest = SensorData::latest()->first();

        // Data RFID
        $cards = RfidCard::latest()->get();
        $total = $cards->count();
        $today = RfidCard::whereDate('created_at', Carbon::today())->count();
        $todayPercent = $total > 0 ? round(($today / $total) * 100) : 0;

        return view('rfid.index', compact(
            'data', 'latest',
            'cards', 'total', 'today', 'todayPercent'
        ));
    }
    public function index2()
    {
        // Data sensor
        $data = SensorData::latest()->take(20)->get()->reverse();
        $latest = SensorData::latest()->first();

        // Data RFID
        $cards = RfidCard::latest()->get();
        $total = $cards->count();
        $today = RfidCard::whereDate('created_at', Carbon::today())->count();
        $todayPercent = $total > 0 ? round(($today / $total) * 100) : 0;

        return view('index2', compact(
            'data', 'latest',
            'cards', 'total', 'today', 'todayPercent'
        ));
    }
    

    public function create(Request $req, MqttService $mqtt)
    {
        $req->validate(['uid' => 'required|size:8', 'name' => 'required|string|max:16']);
        // Kirim perintah ke ESP32
        $mqtt->publishCommand('create', $req->uid, $req->name);
        return back()->with('status', 'Perintah CREATE dikirim');
    }

    public function update(Request $req, RfidCard $card)
    {
        $req->validate([
            'name' => 'required|string|max:16',
            'phone' => 'nullable|string|max:20',
        ]);

        $card->update([
            'name' => $req->name,
            'phone' => $req->phone,
        ]);

        app(\App\Services\MqttService::class)
            ->publishCommand('update', $card->uid, $req->name);

        return back()->with('status', 'Data di‑update & perintah UPDATE dikirim');
    }

    public function destroy(RfidCard $card, MqttService $mqtt)
    {
        $mqtt->publishCommand('delete', $card->uid);
        $card->delete(); // Hapus dari database juga
        return back()->with('status', 'Perintah DELETE dikirim & data dihapus dari database');
    }

    public function saveName(Request $req, RfidCard $card)
    {
        $req->validate([
            'name' => 'required|string|max:16',
            'phone' => 'nullable|string|max:20',
        ]);

        // Update DB lokal
        $card->update([
            'name' => $req->name,
            'phone' => $req->phone,
            'status' => 'created',
        ]);

        // Kirim perintah ke ESP32 agar simpan ke EEPROM (optional: hanya kirim name/UID)
        app(\App\Services\MqttService::class)
            ->publishCommand('create', $card->uid, $req->name);

        return back()->with('status', 'Data disimpan & perintah CREATE dikirim');
    }

    public function getUnknownCards()
    {
        $cards = \App\Models\RfidCard::where('status', 'unknown')->latest()->get();
        return response()->json($cards);
    }

    public function latest()
    {
        return response()->json(SensorData::latest()->first());
    }

    


}
