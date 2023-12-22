<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'category_id',
        'product_price',
        'product_desc',
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function addProduct(Request $request){
        Product::create([
            'product_name' => $request->product_name,
            'category_id',
            'product_price',
            'product_desc',
        ]);
    }
}
