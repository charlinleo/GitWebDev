<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaP',
        'harga',
        'deskripsiP',
    ];

    public function service(){
        return $this->hasMany(Service::class);
    }
}
