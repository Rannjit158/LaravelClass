<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Appp\Models\Collegue;

class CollegueController extends Controller
{
    public function collegue(){

$collegue=DB::table('collegues')->get();
return view('collegue',['collegue'=>$collegue]);
}
public function deleteCollegue(){
    $collegue=DB::table('collegues')
    ->where('id',10)
    ->delete();
    

}

}

