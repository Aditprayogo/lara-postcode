<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
	//
	protected $table = 'db_province_data';

	protected $primaryKey = 'province_code';

	public $timestamps = false;
}
