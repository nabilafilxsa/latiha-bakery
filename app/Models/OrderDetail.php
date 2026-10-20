<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['order_details'];
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Relasi: OrderDetail milik 1 Order
     * Contoh akses: $detail->order->id
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
