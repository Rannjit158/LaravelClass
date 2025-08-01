<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collegue;

class CollegueController extends Controller
{
    public function collegue(){

        $collegue= Collegue::all();
        return view('collegue', compact('collegue'));

    }

}
