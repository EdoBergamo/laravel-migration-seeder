<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::whereDate('departure_time', $currentDate)->get();

        return view('home', compact('trains'));
    }
}
