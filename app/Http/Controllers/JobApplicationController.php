<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function apply(Request $request)
    {
        $jobApplication = new JobApplication;
        $jobApplication->name = $request->name;
        $jobApplication->email = $request->email;
        $jobApplication->qualifications = $request->qualifications;
        $jobApplication->filename = $request->file;
        $jobApplication->save();

        return redirect()->route('jobs.home')->with('status', 'Applied successfuly.');
    }
}
