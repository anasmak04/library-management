<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;


    public function Emprunt()
    {
        return $this->hasMany(Emprunt::class , "livre_id");
    }


    public function user()
    {
        return $this->hasMany(User::class , "user_id");
    }



    protected $fillable = ["description", "reservation_date" , "return_date", "is_returned", "livre_id", "user_id"];

}
