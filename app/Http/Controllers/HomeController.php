<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        Model::factory()->count(5)->forMaker(['name' => 'Lexus'])->create();

        return view('home.index');
    }
}
