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

    protected $fillable = ['name', 'category', 'description', 'requirements', 'published', 'open'];

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
        $end_date = Carbon::parse($this->created_at)->addDays(30);
        $daysOpen = $today->diffInDays($end_date, false);
        return $daysOpen;
    }
}
