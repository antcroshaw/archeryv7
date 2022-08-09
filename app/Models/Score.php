<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['round','score','handicap_id'];
    use HasFactory;
    public function round() {
        return $this->belongsTo(Round::class);
    }

    public function archer() {
        return $this->belongsTo(Archer::class);
    }
}
