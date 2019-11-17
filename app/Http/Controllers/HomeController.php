<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
	{
		# code...
		return view('home.about');
	}

	public function services()
	{
		# code...
		return view('home.services');
	}
}
