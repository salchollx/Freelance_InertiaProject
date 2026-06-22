<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gig extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'delivery_days', 'tags', 'status'];

    //Govorimo da tags treba biti tretiran kao niz, a ne string
    //Ovo je moguce jer smo tags definisali kao JSON 
    //Laravel ovdje automatski pretvara JSON u array
    protected $casts = [
        'tags' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
