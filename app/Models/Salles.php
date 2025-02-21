<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'numero',
        'type',
        'capacite',
        'user_id',
        'photo',
        'status'
    ];


    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
