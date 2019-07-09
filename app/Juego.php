<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
	protected $table = 'juegos';
	public $timestamps = false;

    //Set guarded to an empty array to allow mass assignment of every field
	protected $guarded = array();
}
