<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'order_id',
        'quantity',
        'status'
    ];

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
    
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
