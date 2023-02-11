<?php

namespace App\Models;

use App\Models\Company;
use App\Models\JobApplication;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Session;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'description', 'requirements', 'published', 'open', 'end_date'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function jobApplication()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function remove()
    {
        return route('jobs.delete', $this->id);
    }

    public function daysOpen()
    {
        $today = Carbon::parse(now());
        $end_date = Carbon::parse($this->end_date);
        $daysOpen = $today->diffInDays($end_date, false);
        return $daysOpen;
    }
}
