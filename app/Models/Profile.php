<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    protected $fillable = ['bio', 'title', 'skills', 'hourly_rate', 'avatar_url'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
