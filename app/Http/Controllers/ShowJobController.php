<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;

class ShowJobController extends Controller
{

    public function showJob(Jobs $job, Company $company, Request $request)
    {
        $company = $company->all();
        $company = $company[$job->company_id-1]->name;
        return view('components.show-job', compact('job', 'company'));
    }
}
