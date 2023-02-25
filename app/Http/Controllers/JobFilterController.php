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
        echo "here1";
        $filteredCompanies = Company::latest()->where('name', 'like', $filter.'%')->get();

        if ($filteredCompanies->first() !== null) {
            $filteredCompanies = $filteredCompanies->first()->id;
        } else {
            $filteredCompanies = -1;
        }

        if (!$filter and $filteredCompanies === -1) {
            echo "here2";
            $jobs = Jobs::latest()->paginate(5);
            return view('welcome', compact('jobs'));
        } else {
            echo "here3";
            $jobs = Jobs::latest()
                ->where('company_id', $filteredCompanies)
                ->orWhere('name', 'regexp', $filter)
                ->orWhere('category', 'regexp', $filter)
                ->orWhere('description', 'regexp', $filter)
                ->paginate(5);

            if ($filteredCompanies === -1) {
                echo "here4";
                return view('welcome', compact('jobs', 'filter'));
            } else {
                echo "here5";
                $filter = $filteredCompanies;
                return view('welcome', compact('jobs', 'filter'));
            }
        }
    }
}
