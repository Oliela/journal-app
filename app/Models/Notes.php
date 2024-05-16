<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    protected $table ='notes';

    public $timestamps = true;
    
    protected $fillable = [
        'rubriques_id',
        'users_id',
        'titre', 
        'note',
        'date',
    ];

    public function images()
    {
        return $this->hasMany(Images::class);
    } 

    public function rubriques()
    {
        return $this->belongsTo(Rubriques::class);
    }

    




   
}
