<?php

namespace App\Http\Controllers;

use App\Models\pemain;
use Illuminate\Http\Request;

class pemainController extends Controller
{
    function index(){
        $dataPemain = pemain::all();

        return view("index", compact("dataPemain"));
    }
}
