<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fk_products_id', 'fk_transaction_id'
    ];

    protected $hidden = [

    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'fk_transactions_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'fk_products_id', 'id');
    }
}
