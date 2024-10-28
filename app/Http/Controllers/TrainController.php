<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){
        $trains =Train::all();

        return view("trains.index" , compact("trains"));
    }

    public function today(){
        $trains = Train::where("day_of_the_departure", "2024-10-28")->get();
        return view("trains.today" , compact("trains"));
    }
}
