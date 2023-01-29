<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $jobs = Jobs::all();
        return view('welcome', compact('jobs'));
    }
}
