<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class cv extends Model
{
    use HasFactory;

    public function directory($name)
    {
        $subfolder = 'cv/' . $name;
        Storage::makeDirectory($subfolder);
        return $subfolder;
    }
}
