<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'phone',
        'email',
        'rating',
        'user_id'
    ];

    protected $promary = 'id';

    protected $table = 'hotels';

}
