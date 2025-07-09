<?php

use App\Interfaces\ExampleInterface;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Test route for interface-based route model binding
Route::get('/example/{example}', function (ExampleInterface $example) {
    return response()->json([
        'id' => $example->id,
        'name' => $example->name,
        'route_key_name' => $example->getRouteKeyName()
    ]);
});
