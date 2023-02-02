<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;

class PublicJobsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $jobs = Jobs::latest()->paginate(5);
        $companies = Company::all();
        return view('welcome', compact('jobs', 'companies'));
    }
}
