<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {
        $jobs = Auth::user()->jobs;
        return view('dashboard', compact('jobs'));
    }
}
