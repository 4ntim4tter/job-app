<?php

namespace App\Models;

use App\Models\Jobs;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'companies';

    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at'
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
