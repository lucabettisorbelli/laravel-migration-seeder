<?php

namespace App\Http\Controllers;

use App\Models\Train;


class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', ['trains' => $trains]);
    }
}
