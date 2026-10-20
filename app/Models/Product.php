<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //nama tabel
    protected $fillable = ['products'];
    protected $guarded = ['id'];

    public function orderDetails(){
        return $this->hasMany(orderDetail::class, 'product_id');
    }
}
