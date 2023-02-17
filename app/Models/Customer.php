<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_name',
        'city',
        'phone',
    ];

    protected $dates = [
        'expiry_date',
        'start_date',
        'created_at',
        'updated_at', 
    ];
    
}
