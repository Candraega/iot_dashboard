<?php
namespace App\Exports;

use App\Models\SensorData;
use Maatwebsite\Excel\Concerns\FromCollection;

class SensorDataExport implements FromCollection
{
    public function collection()
    {
        return SensorData::all();
    }
}