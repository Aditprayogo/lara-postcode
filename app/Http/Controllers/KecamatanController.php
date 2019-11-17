<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PostalCode;
use App\Provinsi;

use Illuminate\Support\Str;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
		$postalcodes = PostalCode::paginate(1000);
		
		return view('kecamatan.index', compact('postalcodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//
		

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $cityname)
    {

		$namakota = Str_replace('-', ' ',$cityname);

		$postalcodes = PostalCode::where('province_code', $id)
		->where('city', $namakota)
		->orderBy('urban', 'asc')
		->take(1000)
		->get();

		$city = $cityname;

		return view('kecamatan.show', compact('postalcodes', 'city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
