<?php

namespace App\Http\Controllers;


use App\Models\Company;
use App\Models\CompanyApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $companies = Company::latest()->paginate(3);
        return view('auth.admin.dashboard', compact('companies'));
    }

    public function delete(Request $request, Company $company)
    {
        $company->where('id', $request->company)->delete();
        return redirect()->route('admin.dash')->with('status', 'Company deleted successfuly');
    }
    public function edit(Request $request, Company $company)
    {
        return view('auth.admin.edit', compact('company'));
    }
    public function store(Request $request, Company $company)
    {
        $company = $company->firstOrNew([
            'id' => $request->id
        ]);

        $company->name = $request->name;
        $company->email = $request->email;
        $placeholder = Str::random(10);
        if(!$company->password) {
            $company->password = Hash::make($placeholder);
            $admin = Auth::user();
            Mail::raw('Hello your account is created, your new password is '. $placeholder, function ($message) use ($company, $admin, $placeholder) {
                $message->from($admin->email, $admin->name)
                ->to($company->email, $company->name)
                ->subject('Password for your new account.');
            });
        }

        $company->save();

        return redirect()->route('admin.dash')->with('status', 'Company ' . $request->name . ' added successfuly.');
    }

    public function stats(Company $company)
    {
        return view('auth.admin.company-stats', compact('company'));
    }

    public function createCompanyForm()
    {
        return view('auth.admin.create-company');
    }

    public function inactive()
    {
        return view('auth.admin.inactive');
    }

    public function company_requests(CompanyApplication $comp_app)
    {
        $comp_app = $comp_app->all();
        return view('auth.admin.requests', compact('comp_app'));
    }
}
