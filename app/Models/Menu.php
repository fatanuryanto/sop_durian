<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'stock'
    ];
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    public function orderDetail(){
        return $this->hasMany(OrderDetail::class);
    }
}
