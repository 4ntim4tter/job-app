<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\Jobs;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request, Jobs $jobs)
    {
        $user_id = Auth::user()->id;
        $jobs = Jobs::where('company_id', $user_id)->latest()->paginate(4);
        return view('dashboard', compact('jobs'));
    }
}
