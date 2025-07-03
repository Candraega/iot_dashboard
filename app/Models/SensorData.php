<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;

    // Jika nama tabel di database bukan "sensor_data"
    // protected $table = 'nama_tabel_anda';

    // Jika tidak menggunakan timestamps
    // public $timestamps = false;

    protected $fillable = [
        'temperature',
        'humidity',
        'flame_detected',boolean
    ];
}
