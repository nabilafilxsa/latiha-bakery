<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function orderDetails()
    {
        //relasi ke orderdetail
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            'Pending' => 'bg-yellow-100 text-yellow-700 border-yellow-300',
            'Diproses' => 'bg-blue-100 text-blue-700 border-blue-300',
            'Selesai' => 'bg-green-100 text-green-700 border-green-300',
            default => 'bg-gray-100 text-gray-700 border-gray-300',
        };
}
}
