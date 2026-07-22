<?php

use App\Http\Controllers\Student\ShowController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return view('welcome');
});

// Manajemen Siswa

Route::name('students.')->prefix('students')->group(function () {

    Route::get('/', [StudentController::class, 'index'])->name('index');

    Route::get('/{id}', ShowController::class)->name('show');

});
