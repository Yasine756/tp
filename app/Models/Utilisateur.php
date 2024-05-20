<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $table='utilisateurs';
    protected $primarykey='id';
    protected $fillables=['nom','mail','password','rôle'];
    public function evaluations(){
        return $this->belongsToMany(Evaluation::class);
    }

}
