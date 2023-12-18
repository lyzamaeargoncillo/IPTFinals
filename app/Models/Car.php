<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'brand', 
        'model', 
        'year', 
        'rental_fee',
        'rentals_id',
    ];


    /**
     * Get the brand that owns the car.
     */
    public function brand()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    /**
     * Get the owner of the car.
     */
    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rentals_id');
    }
}


