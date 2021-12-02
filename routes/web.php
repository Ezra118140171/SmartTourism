<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Livewire\kendaraanPage;
use Illuminate\Routing\RouteGroup;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/kendaraanPage', kendaraanPage::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum','verified']], function() {
    Route::get('kendaraanPage', kendaraanPage::class)->name('kendaraanPage');

});

Route::resource('kendaraan', KendaraanController::class);


// Route::group(['middleware' => ['auth:sanctum','verified']], function() {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashbpard');

//     Route::get('kendaraan', kendaraanPage::class)->name();
// });
