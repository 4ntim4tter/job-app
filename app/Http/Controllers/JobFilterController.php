<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;

class JobFilterController extends Controller
{
    public function filter(Request $request)
    {
        $filter = strtolower($request->query('search'));
        $filteredCompanies = Company::latest()->where('name', 'LIKE', $filter)->get();

        if ($filteredCompanies->first() !== null) {
            $filteredCompanies = $filteredCompanies->first()->id;
        } else {
            $filteredCompanies = -1;
        }

        if (!$filter and $filteredCompanies === -1) {
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
