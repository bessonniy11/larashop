<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // todo проверить, скорее всего дальше эта функция будет не нужна
    // public function getCategory()
    // {
    //     return $category = Category::find($this->category_id);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }
}
