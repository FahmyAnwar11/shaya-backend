<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TransactionDetail extends Model
{
    use softDeletes;

    protected $fillable = [
        'produtcs_id', 'transactions_id'
    ];

    protected $hidden = [
       
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

}
