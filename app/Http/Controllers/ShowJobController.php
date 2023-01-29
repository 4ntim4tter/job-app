<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class ShowJobController extends Controller
{

    public function showJob(Jobs $job, Request $request)
    {
        return view('components.show-job', compact('job'));
    }
}
