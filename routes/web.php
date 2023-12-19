<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/planets', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    return view('planets', compact('planets'));
});

Route::get('/planets/{planet}', function ($planet) {
    // Assuming $planet is the name of the planet
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that\'s inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    $selectedPlanet = collect($planets)->firstWhere('name', ucfirst($planet));

    if ($selectedPlanet) {
        return view('planet_details', compact('selectedPlanet'));
    } else {
        abort(404); // Planet not found
    }
});

*/
use App\Http\Controllers\PlanetController;

// Display all planets
Route::get('/planets', [PlanetController::class, 'index']);

// Show details of a specific planet
Route::get('/planets/{planet}', [PlanetController::class, 'show']);




?>






