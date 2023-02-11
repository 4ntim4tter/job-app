<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function create()
    {
        return view('components.create');
    }

    public function store(Request $request, Jobs $job)
    {
        $job->name = $request->name;
        $job->category = $request->category;
        $job->description = $request->description;
        $job->requirements = $request->requirements;
        $job->company_id = Auth::user()->id;
        $job->published = "$request->publish === 'on'"? 1 : 0;
        $job->open = "$request->open === 'on'"? 1 : 0;

        if($request->open){
            $job->end_date = $request->enddate;
        }

        $job->save();

        return redirect()->route('jobs.dashboard')->with('status', 'Job posted successfuly.');
    }

    public function delete(Request $request, Jobs $job)
    {
        // dd($request->job);
        $job->where('id', $request->job)->delete(); //->deleteOrFail();
        return redirect()->route('jobs.dashboard')->with('status', 'Job deleted successfuly.');
    }

    public function edit(Request $request, Jobs $job)
    {
        return view('components.edit', compact('job'));
    }
}
