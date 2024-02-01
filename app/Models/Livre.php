<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    public function Livre()
    {
        return $this->belongsTo(Livre::class , "livre_id");
    }



    protected $fillable = ['title', 'author', 'genre', 'description', 'publication_year', 'total_copies', 'available_copies'];

}


