<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $fillable = [
        'name', 'rule', 'semester_id'
    ];
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }
}
