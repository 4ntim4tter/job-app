<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function construct()
    {
        $this->middleware(['auth']);
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
        $job->save();

        return redirect()->route('jobs.dashboard')->with('status', 'Job posted successfuly.');
    }

    public function delete(Request $request, Jobs $job)
    {
        // dd($request->job);
        $job->where('id', $request->job)->delete(); //->deleteOrFail();
        return redirect()->route('jobs.dashboard')->with('status', 'Job deleted successfuly.');
    }

    public function filter(Request $request)
    {
        $jobs = Jobs::with('company')->latest();
        $filter = strtolower($request->query('search'));

        if(!$filter){
            $jobs->paginate(5);
            return view('welcome', compact('jobs'));
        } else {
            $jobs = Jobs::with('company')->latest()
                ->where('name', $filter)
                ->orWhere('category', $filter)
                ->orWhere('description', $filter)
                ->orWhere($jobs->company()->name, $filter)
                ->paginate(5);
            return view('welcome', compact('jobs'));
        }

    }
}
