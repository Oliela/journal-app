<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table ='images';

    public $timestamps = true;
    
    protected $fillable = [
        'notes_id',
        'url', 
    ];


    public function notes()
    {
        return $this->belongsTo(Notes::class);
    }
}
