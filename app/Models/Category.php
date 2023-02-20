<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'add_category',
        'company',
    ];

    protected $dates = [
        'expiry_date',
        'start_date',
        'created_at',
        'updated_at', 
    ];
}
