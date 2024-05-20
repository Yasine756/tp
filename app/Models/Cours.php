<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillables=['title','description','durée','contenut'];
    public function lecons(){
        return $this->hasMany(Lecon::class);
    }
    public function evaluations(){
        return $this->hasMany(Evaluation::class);
    }
}
