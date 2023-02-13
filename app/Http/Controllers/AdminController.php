<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    public function index(Request $request, Jobs $jobs)
    {
        $jobs = Jobs::latest()->paginate(3);
        return view('auth.admin.dashboard', compact('jobs'));
    }
}
