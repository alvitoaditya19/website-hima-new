<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        // 'orig_filename', 'name_dosen', 'link', 'jumlah_video', 'photos'
    ];

    protected $hidden = [];
}
