<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'productname',
        'product_description',
    ];

    protected $dates = [
        'expiry_date',
        'start_date',
        'created_at',
        'updated_at', 
    ];
}
