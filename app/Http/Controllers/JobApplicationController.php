<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function apply(Request $request)
    {
        $cv = new cv;
        $jobApplication = new JobApplication;
        $jobApplication->name = $request->name;
        $jobApplication->email = $request->email;
        $jobApplication->qualifications = $request->qualifications;
        $jobApplication->filename = $request->file->store($cv->directory($request->query('companyName')));
        $jobApplication->save();

        return redirect()->route('jobs.home')->with('status', 'Applied successfuly.');
    }
}
