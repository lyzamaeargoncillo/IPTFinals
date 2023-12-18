<?php

// app/Models/Rental.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'rental_date',
        'return_date',
        'rental_fee'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    
}
