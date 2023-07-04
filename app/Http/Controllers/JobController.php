<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function create()
    {
        return view('components.create');
    }

    public function store(Request $request, Jobs $job)
    {
        $job = $job->firstOrNew([
            'id' => $request->id
        ]);
        $job->name = $request->name;
        $job->category = $request->category;
        $job->description = $request->description;
        $job->requirements = $request->requirements;
        $job->company_id = Auth::user()->id;
        $job->published = "$request->publish === 'on'" ? 1 : 0;
        $job->open = "$request->open === 'on'" ? 1 : 0;

        if ($request->open) {
            $job->end_date = $request->enddate;
        }
        $job->save();

        if (!$request->id) {
            return redirect()->route('jobs.dashboard')->with('status', 'Job posted successfuly.');
        }
        return redirect()->route('jobs.dashboard')->with('status', 'Job edited successfuly.'); //route('jobs.dashboard', ['page' => $page])->
    }

    public function delete(Request $request, Jobs $job)
    {
        $job->where('id', $request->job)->delete(); //->deleteOrFail();
        return redirect()->route('jobs.dashboard')->with('status', 'Job deleted successfuly.');
    }

    public function edit(Request $request, Jobs $job)
    {
        return view('components.edit', compact('job'));
    }
}
