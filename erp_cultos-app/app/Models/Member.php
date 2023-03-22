<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table='members';

    protected $fillable=[
        'Name',
        'Password',
        'Password_confirmation',
        'Email',
        'Profission',
        'Number_of_bi',
        'Gender',
        'Contact',
        'Surname',
        'Date_of_birth',
        'Marital_status',
        'Baptism',
        'Time_in_church',
        'Affiliation',
        'Theological_level'
    ];
}
