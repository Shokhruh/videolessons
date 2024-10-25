<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function docs() {
        return $this->hasMany(Doc::class);
    }

    public function getAuthorName($video) {
        return User::find($video->user_id)->name;
    }
}