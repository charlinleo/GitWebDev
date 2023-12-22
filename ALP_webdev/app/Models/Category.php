<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name'
    ];

    public function products(): HasMany{
        return $this->hasMany(Product::class);
    }

    public function addCategory(Request $request){
        Category::create([
            'category_name'=> $request->category_name
        ]);
    }
}
