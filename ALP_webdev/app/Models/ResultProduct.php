<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ResultProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'result_id',
        'product_id'
    ];

    public function results() : BelongsTo {
        return $this ->belongsTo(Result::class, 'result_id','id');
    }

    public function prods() : BelongsTo {
        return $this ->belongsTo(Product::class, 'product_id','id');
    }
}
