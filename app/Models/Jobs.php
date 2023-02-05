<?php

namespace App\Models;

use App\Models\Company;
use App\Models\JobApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'description', 'requirements'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function jobApplication()
    {
        return $this->hasMany(JobApplication::class);
    }
}