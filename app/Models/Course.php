<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name_course', 'name_dosen', 'link', 'jumlah_video', 'photos'
    ];

    protected $hidden = [];
}
