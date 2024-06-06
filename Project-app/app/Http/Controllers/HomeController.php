<?php
namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Trip;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $trips = Trip::all(); 

        return view('home', [
            'destinations' => $destinations,
            'trips' => $trips,
        ]);
    }
}
