<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function round() {
        return $this->belongsTo(Round::class);
    }
}
