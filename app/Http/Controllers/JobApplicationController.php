<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\Jobs;

class JobApplicationController extends Controller
{
    public function apply(Request $request, Jobs $job)
    {
        $job = $job->find($request->query('job'));
        $cv = new cv;
        $jobApplication = new JobApplication;
        $jobApplication->name = $request->name;
        $jobApplication->email = $request->email;
        $jobApplication->qualifications = $request->qualifications;
        $jobApplication->filename = $request->file->store($cv->directory($job->name));
        $jobApplication->jobs_id = $job->id;
        $jobApplication->save();

        return redirect()->route('jobs.home')->with('status', 'Applied successfuly.');
    }

    public function showApplications(Request $request, JobApplication $jobApp, Jobs $job)
    {
        $jobApp = $jobApp->where('jobs_id', $request->query('job'))->get();
        return view('components.job-details', compact('jobApp'));
    }
}
