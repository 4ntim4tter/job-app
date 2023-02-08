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

    public function edit(Request $request)
    {
        return view('components.edit');
    }

    public function filter(Request $request)
    {
        $filter = strtolower($request->query('search'));
        $filteredCompanies = Company::latest()->where('name', 'regexp', $filter)->get();

        if ($filteredCompanies->first() !== null) {
            $filteredCompanies = $filteredCompanies->first()->id;
        } else {
            $filteredCompanies = -1;
        }
        // dd($filteredCompanies->first()->id);
        // dd(Jobs::with([
        //     'company' => function ($query) {
        //         $query->select('name');
        // }])->get());

        if(!$filter and $filteredCompanies === -1){
            $jobs = Jobs::latest()->paginate(5);
            return view('welcome', compact('jobs'));
        } else {
            $jobs = Jobs::latest()
                ->where('company_id', $filteredCompanies)
                ->orWhere('name', 'regexp', $filter)
                ->orWhere('category', 'regexp', $filter)
                ->orWhere('description', 'regexp', $filter)
                ->paginate(5);

            if ($filteredCompanies === -1) {
                return view('welcome', compact('jobs', 'filter'));
            } else {
                $filter = $filteredCompanies;
                return view('welcome', compact('jobs', 'filter'));
            }
        }

    }
}
