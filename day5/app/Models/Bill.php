<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'time' => 'datetime:Y-m-d H:mm:ss',
    ];

    public $fillable = ['id_table', 'total_amount', 'time'];
}
