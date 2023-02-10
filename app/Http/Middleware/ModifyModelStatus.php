<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Jobs;
use Illuminate\Http\Request;

class ModifyModelStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $jobs = Jobs::latest()->get();
        foreach ($jobs as $job) {
            if ($job->daysOpen() > 0) {
                $job->open = true;
                $job->save();
            } else {
                $job->open = false;
                $job->save();
            }
        }
        return $next($request);
    }
}
