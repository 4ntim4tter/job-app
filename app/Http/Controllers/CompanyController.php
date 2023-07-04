<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request, Jobs $jobs)
    {
        $company = Auth::user();
        $jobs = Jobs::where('company_id', $company->id)->latest()->paginate(3);
        return view('dashboard', compact('jobs', 'company'));
    }

    public function profile()
    {
        $company = Auth::user();
        return view('components.profile', compact('company'));
    }

    public function store(Request $request)
    {
        $company = Auth::user();
        if (Hash::check($request->password, Auth::user()->password)) {
            $company->name = $request->name;
            $company->email = $request->email;

            if ($request->new_password and $request->new_password) {
                if ($request->new_password === $request->old_password) {
                    $company->password = $request->password;
                    $company->save();
                    return redirect()->route('jobs.dashboard')->with('status', 'Profile edited successfuly.');
                } else {
                    return redirect()->route('company.profile', compact('company'))->with('match', 'Passwords do not match.');
                }
            } else {
                $company->save();
                return redirect()->route('jobs.dashboard')->with('status', 'Profile edited successfuly.');
            }
        }
        return redirect()->route('company.profile', compact('company'))->with('message', 'Incorrect password.');
    }
}
