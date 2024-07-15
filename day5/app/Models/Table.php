<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    public $timestamps = false;
    use HasFactory;

    // protected function customerName(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (mixed $value) => "tinhdoan",
    //         set: fn (string $value) => "ô nô",
    //     );
    // }

    // protected function getCustomerNameAttribute($value) {
    //     return "tinhdaon";
    // }

    // protected function setCustomerNameAttribute($value) {
    //     $this->attributes['customer_name'] = "tinhdoan da o day";
    // }

}
