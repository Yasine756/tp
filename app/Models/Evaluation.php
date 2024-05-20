<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillables=['title','description','nbr_question'];
    public function utilisateurs(){
        return $this->belongsToMany(Utilisateur::class);
    }
    public function cours(){
        return $this->belongsTo(Cours::class);
    }
}
