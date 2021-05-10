<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        $albums = Album::all();
        return view('home', compact('albums'));
    }

    public function admin(){
        $albums = Album::all();
        return view('admin.main', compact('albums'));
    }
}
