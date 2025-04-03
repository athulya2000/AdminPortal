<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    protected $fillable = ['id','customer_id','amount','date','status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
