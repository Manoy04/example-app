<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Define a private property to store the array of planets
    private $planets = [
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

    // Display all planets
    public function index()
    {
        return view('planets', ['planets' => $this->planets]);
    }

    // Show details of a specific planet
    public function show($planet)
    {
        $selectedPlanet = collect($this->planets)->firstWhere('name', ucfirst($planet));

        if ($selectedPlanet) {
            return view('planet_details', compact('selectedPlanet'));
        } else {
            abort(404); // Planet not found
        }
    }
}


?>