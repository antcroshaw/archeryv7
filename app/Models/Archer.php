<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scores(){
        return $this->hasMany(Score::class);
    }
}
