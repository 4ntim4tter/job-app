<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // Auth::loginUsingId(1);
        return view('welcome', compact('jobs', 'companies'));
    }
}
