<?php

use Mequy\Leabio\Models\Patient;
use Illuminate\Support\Facades\Route;
use Mequy\Leabio\Controllers\ResourceController;

Route::get('api/patient', function() {
    $data = Patient::all()->toArray();
    
    return response()->stream(function () use ($data) {
        $key = array_keys($data[0]);
        $key = array_splice($key, 1, 3);
        $handle = fopen('php://output', 'w');
        fputcsv($handle, $key); // Ghi header
        foreach ($data as $record) {
            fputcsv($handle, [$record["name"], $record["gender"], $record["height"]]); // Ghi dữ liệu
        }
        fclose($handle);
    }, 200, [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="exported-data.csv"',
    ]);
});

Route::post('api/patient-meal', [ResourceController::class, 'create']);

