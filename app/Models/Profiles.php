<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $table ='profils';

    public $timestamps = true;
    
    protected $fillable = [
        'users_id',
        'nom', 
        'prenom',
        'adresse',
        'date_naissance',
        'genre',
        'photo',
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
