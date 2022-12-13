<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Round extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','location','category_id', 'deleted_at'];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scores() {
        return $this->hasMany(Score::class);
    }

    public function handicaps() {
        return $this->hasMany(Handicap::class);
    }
}
