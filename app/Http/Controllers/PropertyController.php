<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{

    public function getIdMitra($id)
    {
        $mitra = DB::table('mitra')->where('id', '=', $id)->first();
        $data = DB::table('property')->where('id_mitra', '=', $id)->get();
        return view('property',  compact('data', 'mitra')); //mempaketkan data mitra dan property, serta dapat di gunakan di blade property
    }
}
