<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livre extends Model
{
    use HasFactory , SoftDeletes;

    public function Livre()
    {
        return $this->belongsTo(Livre::class , "livre_id");
    }



    protected $fillable = ['title', 'author', 'genre', 'description', 'publication_year', 'total_copies', 'available_copies'];

}


