<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Api\SensorDataController;
use App\Exports\SensorDataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// require __DIR__ . '/auth.php';
// Route::get('rfid', [RfidController::class,'index'])->name('rfid.index');
// Route::post('rfid/{card}/name', [RfidController::class,'saveName'])->name('rfid.saveName');
// Route::put('rfid/{card}', [RfidController::class,'update'])->name('rfid.update');
// Route::delete('rfid/{card}', [RfidController::class,'destroy'])->name('rfid.destroy');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/rfid', [RfidController::class, 'index'])->middleware('auth');



Route::get('suhu', [DashboardController::class, 'index'])->middleware('auth');

Route::post('rfid/{card}/name', [RfidController::class, 'saveName']);
// Route::get('rfid', [RfidController::class,'index']);
Route::post('rfid/create', [RfidController::class,'create']);
Route::put('rfid/{card}', [RfidController::class,'update']);
Route::delete('/rfid/{card}', [RfidController::class,'destroy']);
Route::get('/rfid/unknown-cards', [RfidController::class, 'getUnknownCards']);

Route::post('rfid2/{card}/name', [RfidController::class, 'saveName']);
Route::get('rfid2', [RfidController::class,'index2']);
Route::post('rfid2/create', [RfidController::class,'create']);
Route::put('rfid2/{card}', [RfidController::class,'update']);
Route::delete('/rfid2/{card}', [RfidController::class,'destroy']);
Route::get('/rfid2/unknown-cards', [RfidController::class, 'getUnknownCards']);

Route::get('/Gerbang', [KunjunganController::class, 'index'])->middleware('auth');
Route::get('/api/kunjungan/chart-data', [KunjunganController::class, 'chartData']);





// copas iotagatha


// Route ke halaman dashboard


// Route untuk ekspor Excel
Route::get('/export', function () {
    return Excel::download(new SensorDataExport, 'sensor_data.xlsx');
})->middleware('auth');

Route::get('/api/last-n/{count?}', [SensorDataController::class, 'lastN']);
Route::get('/api/latest', [SensorDataController::class, 'latest']);


// Default route (welcome page)
Route::get('/', function () {
    return view('rfid.index');
});

Route::group(['prefix' => '/'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn()=>view('index'))->name('home')->middleware('auth');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});