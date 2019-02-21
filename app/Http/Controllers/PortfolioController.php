<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function Project()
    {
    	$projecten = DB::select('select * from projects');
		 return view('projects', ['projecten' => $projecten]);
    }
}
