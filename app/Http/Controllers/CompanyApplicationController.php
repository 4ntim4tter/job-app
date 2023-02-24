<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Company;
use App\Models\CompanyApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CompanyApplicationController extends Controller
{
    public function apply()
    { 
        return view('apply');
    }

    public function store(Request $request, Company $company, CompanyApplication $comp_app, Admin $admins)
    {

        if (!$company->all()->doesntContain($request->email) or !$comp_app->all()->doesntContain($request->email)) {
            return redirect()->back()->with('status', 'That e-mail already exists.');
        }

        $comp_app->name = $request->name;
        $comp_app->email = $request->email;
        $comp_app->save();

        $admins = $admins->all();

        // foreach($admins->all() as $admin) {
        //     Mail::raw('You have received a registration request from ' . $comp_app->name . ' with email: ' . $comp_app->email, function ($message) use ($admin, $comp_app) {
        //         $message->from($comp_app->email, $comp_app->name)
        //         ->to($admin->email, $admin->name)
        //         ->subject('Registration request.');
        //     });
        // }

        return redirect()->route('jobs.home')->with('status', 'Thank you for your application. Your account will be created by the first admin available and your password will be sent to your e-mail.');
    }
}
