<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['gig_id', 'buyer_id', 'amount', 'status', 'due_at'];

    protected $casts = [
        'due_at' => 'datetime',
    ];

    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
