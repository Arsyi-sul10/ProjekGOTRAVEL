<?php

namespace App\Http\Controllers;

use App\location;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class locationController extends Controller
{
    //
    public function index(){
        $locations = DB::table('locations')->get();
        return view('lokasi',['locations' => $locations]);
    }

    
}
