<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $car = Car::find(1);

        // dd($car->features, $car->primaryImage);

        $car = Car::find(1);
        dd($car->images);

        return view('home.index');
    }
}
