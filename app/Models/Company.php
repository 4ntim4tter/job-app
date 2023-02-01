<?php

namespace App\Models;

use App\Models\Jobs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
