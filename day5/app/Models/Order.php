<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['id_table', 'id_food', 'quantity'];

    public function food() {
        return $this->hasOne(Food::class, 'id', 'id_food');
    }

    // public function food() {
    //     return $this->belongsTo(Food::class, 'id_food', 'id');
    // }

}
