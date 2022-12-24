<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Round extends Model
{
    use HasFactory;

    protected $fillable = ['name','location','category_id'];
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
