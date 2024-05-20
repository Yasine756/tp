<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{
    use HasFactory;
    protected $fillables=['title','descritpion','durée','contenut'];
    public function cours(){
        return $this->belongsTo(Cours::class);
    }
}
