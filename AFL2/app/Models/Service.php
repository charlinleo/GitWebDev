<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'durasiS',
        'hargaS',
        'imageS',
        'product_id',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
