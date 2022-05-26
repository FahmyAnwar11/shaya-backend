<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaction extends Model
{
    use softDeletes;

    protected $fillable = [
        'uudi', 'name', 'email', 'number', 'address', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [
       
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }
}
