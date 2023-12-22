<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'service_id'
    ];

    public function reservations(): BelongsTo
    {
        return $this->belongsTo(Reservation::class, 'reservation_id', 'id');
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
