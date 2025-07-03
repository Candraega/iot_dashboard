<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MqttService;
use App\Models\RfidCard;

class ListenRfidStatus extends Command
{
    protected $signature = 'mqtt:listen-rfid-status';
    protected $description = 'Dengarkan status RFID dari ESP32';

    public function handle(MqttService $mqtt)
    {
        $this->info('Listening to RFID status...');
        $mqtt->subscribeStatus(function ($data) {
            $status = $data['status'];
            $uid = $data['uid'];
            $name = $data['name'] ?? null;

            if ($status === 'unknown') {
                $exists = RfidCard::where('uid', $uid)->exists();
                if (!$exists) {
                    RfidCard::create([
                        'uid' => $uid,
                        'name' => null,
                        'status' => 'unknown',
                    ]);
                    $this->info("New UID $uid added as unknown");
                }
                return;
            }

            if ($status === 'deleted') {
                $card = RfidCard::where('uid', $uid)->first();
                if ($card) {
                    $card->delete();
                    $this->info("UID {$uid} deleted from database");
                } else {
                    $this->info("UID {$uid} delete command received but no record found");
                }
                return;
            }

            // Untuk status selain 'unknown' dan 'deleted', update atau buat record
            RfidCard::updateOrCreate(
                ['uid' => $uid],
                ['name' => $name, 'status' => $status]
            );
            $this->info("Status {$status} for UID {$uid}");
        });

    }

}
