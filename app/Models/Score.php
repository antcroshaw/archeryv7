<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;
class Score extends Model
{
    protected $fillable = ['round_id','archer_id','score','location','deleted_at'];
    use HasFactory, SoftDeletes;
    public function round() {
        return $this->belongsTo(Round::class);
    }

    public function archer() {
        return $this->belongsTo(Archer::class);
    }
}
