<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyApplication extends Model
{
    use HasFactory;

    protected $table = 'company_application';

    protected $fillable = [
        'name',
        'email'
    ];
}
