<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'description', 'requirements'];

    public function jobRoute()
    {
        return route('jobs.show', $this);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}