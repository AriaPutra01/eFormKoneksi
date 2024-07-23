<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemohonController;
use App\Exports\WordExport;
use App\Http\Controllers\pemohonEmailController;
use App\Http\Controllers\pemohonKoneksiController;

Route::get('/', function () {
    return view('dashboard');
})->name('/');

Route::get('/pemohonKoneksi', [pemohonKoneksiController::class, 'create'])
    ->name('pemohonKoneksi.create');

Route::get('/pemohonEmail', [pemohonEmailController::class, 'create'])
    ->name('pemohonEmail.create');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/formKoneksi', PemohonController::class)->middleware(['auth', 'verified']);
Route::get('/form/export-excel', [PemohonController::class, 'export'])->name('eform.export.excel');
Route::get('/pemohon/{id}/export-word', [WordExport::class, 'export'])->name('pemohon.export.word');

require __DIR__ . '/auth.php';
