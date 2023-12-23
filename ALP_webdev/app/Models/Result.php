<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'type_id',
        'resultproduct_id',
        'resultservice_id',
    ];

    public function types(): BelongsTo{
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function resultproduct(): HasMany{
        return $this->hasMany(ResultProduct::class, 'result_id', 'id');
    }

    public function resultservice(): HasMany{
        return $this->hasMany(ResultService::class, 'result_id', 'id');
    }
}
