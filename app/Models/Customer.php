<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        // Add other fillable attributes as needed
    ];

    /**
     * Get the cars owned by the customer.
     */
    public function rentals()
    {
        return $this->hasMany(Rentals::class);
    }
}
