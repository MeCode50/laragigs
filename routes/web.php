<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => [
            'id' =>1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus eros quis commodo scelerisque. Morbi eget ex
             varius, blandit metus a, malesuada nisi. Ut ac libero quis ipsum blandit fermentum. Nulla facilisi. Donec vel magna in massa fermentum efficitur. 
             Sed efficitur finibus odio, ac efficitur pede fermentum vel. Vivamus vel augue non odio efficitur efficitur. Donec vel magna in massa fermentum efficitur. 
             Sed efficitur finibus odio, 
            ac efficitur pede fermentum vel. Vivamus vel augue non odio efficitur efficitur.'
        ],
        [
            'id' =>2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus eros quis commodo scelerisque. Morbi eget ex
             varius, blandit metus a, malesuada nisi. Ut ac libero quis ipsum blandit fermentum. Nulla facilisi. Donec vel magna in massa fermentum efficitur. 
             Sed efficitur finibus odio, ac efficitur pede fermentum vel. Vivamus vel augue non odio efficitur efficitur. Donec vel magna in massa fermentum efficitur. 
             Sed efficitur finibus odio, ac efficitur pede fermentum vel. Vivamus vel augue non odio efficitur efficitur.'
        ]
    ]);
});
