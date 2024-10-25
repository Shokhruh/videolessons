<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function video() {
        return $this->belongsTo(Video::class);
    }

    public function getAuthorName($docs) {
        return User::find($docs->user_id)->name;
    }
}
