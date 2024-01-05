<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'date',
        'total_purchase',
        'status_id',
    ];

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'reservation_products');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'reservation_services');
    }
}
