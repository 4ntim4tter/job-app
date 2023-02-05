<?php

namespace App\Models;

use App\Models\Jobs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'qualifications', 'filename'];

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }
}
