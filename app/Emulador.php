<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emulador extends Model
{
	protected $table = 'emuladores';
	public $timestamps = false;

    //Set guarded to an empty array to allow mass assignment of every field
	protected $guarded = array();
}
