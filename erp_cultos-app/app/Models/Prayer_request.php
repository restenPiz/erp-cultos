<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prayer_request extends Model
{
    use HasFactory;

    protected $table='prayer_requests';

    protected $fillable=[
        'Username','Description','Date','Hour','Title'
    ];

}
