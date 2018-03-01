<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsControler extends Controller
{
    public function index(){
    	return view('albums.index');
    }
    public functiion create(){
    	return view('albums.create');
    }
}
