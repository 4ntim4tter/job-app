<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
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
        $jobs = Jobs::latest()->where('published', 1)->paginate(5);
        $companies = Company::all();
        return view('welcome', compact('jobs', 'companies'));
    }
}
