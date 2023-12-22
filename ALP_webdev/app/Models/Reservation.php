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
    ];

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class);
    }

    public function reservationpros(): HasMany{
        return $this->hasMany(Reservation_product::class, 'reservation_id', 'id');
    }
}
