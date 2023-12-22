<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'product_id'
    ];

    public function reservations() : BelongsTo {
        return $this ->belongsTo(Reservation::class, 'reservation_id','id');
    }

    public function productss() : BelongsTo {
        return $this ->belongsTo(Product::class, 'product_id','id');
    }
}
