<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
	//
	protected $table = 'db_postal_code_data';

	public $timestamps = false;

	public function provinsi()
	{
		# code...
		return $this->belongsTo('App\Provinsi', 'province_code', 'province_code');
	}
	
}
