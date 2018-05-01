<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debuger extends Model
{
    //

	public static function show($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}
