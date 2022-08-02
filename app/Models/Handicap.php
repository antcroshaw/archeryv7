<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','location','category_id'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
