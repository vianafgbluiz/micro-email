<?php


use App\Jobs\CompanyCreatedJob;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Sucesso ao retornar'
    ]);
});

Route::get('/teste', function () {
    CompanyCreatedJob::dispatch('teste@gmail.com')->onQueue('queue_email');
    return response()->json([
        'success' => true,
        'message' => 'Sucesso ao retornar'
    ]);
});
