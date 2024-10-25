<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function videos() {
        return $this->hasMany(Video::class);
    }

    public function getFieldName($course) {
        return Field::find($course->field_id)->name;
    }
}
