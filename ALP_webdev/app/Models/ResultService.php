<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ResultService extends Model
{
    use HasFactory;

    protected $fillable = [
        'result_id',
        'service_id'
    ];

    public function results() : BelongsTo {
        return $this ->belongsTo(Result::class, 'result_id','id');
    }

    public function services() : BelongsTo {
        return $this ->belongsTo(Service::class, 'service_id','id');
    }
}
