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

    //Inicio da parte do metodo responsavel por conectar as tabelas
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_member');
    }
}
