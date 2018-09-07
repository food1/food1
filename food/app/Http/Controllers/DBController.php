<?php

namespace App\Http\Controllers;

use App\Dianpu;

use Illuminate\Http\Request;

class DBController extends Controller
{
    

	public function model()
	{
		$dianpu = Dianpu::find(2);
		// $food1 = Food1::find(1);
		$food1 = $dianpu->food1s;
		

		// dd($food1);

	}


}
