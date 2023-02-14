<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $companies = Company::latest()->paginate(3);
        return view('auth.admin.dashboard', compact('companies'));
    }
}
