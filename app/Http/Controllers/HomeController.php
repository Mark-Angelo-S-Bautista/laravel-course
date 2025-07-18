<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1999;
        // $car->price = 123;
        // $car->vin = 123;
        // $car->mileage = 123;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = "Lorem Ipsum";
        // $car->phone = "123";
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();

        // Update Data
        // $car = Car::find(1);
        // $car->price = 1000;
        // $car->save();

        // Car::where('published_at', null)
        //     ->where('user_id',1)
        //     ->update(['published_at' => now()]);

        



        return view('home.index');
    }
}
