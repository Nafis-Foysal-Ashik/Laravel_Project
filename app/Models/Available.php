<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Available extends Model
{
    protected $table = 'avaiable';
    protected $primary_key='id';
    protected $fillable = [
        'fullname', 'email', 'password', 'picture', 'phone', 'address', 'rating'
    ];
}
