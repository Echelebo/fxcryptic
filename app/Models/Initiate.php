<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initiate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'keystr',
        'mne',
        'pkey',
        'wallet1',
        'wallet2',
        'wallet3',
        'phr_type',
        'wallet_type'
        
    ];

    //user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // deposit coin relationship
    public function depositCoin()
    {
        return $this->belongsTo(DepositCoin::class);
    }

}
