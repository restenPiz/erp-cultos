<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table="departments";

    protected $fillable=[
        'Name',
    ];

    //Inicio dos metodos responsaveis por interligar a tabela de departamentos com a de usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function name($id)
    {
        return User::find($id)->name;
    }
    public function activitys()
    {
        return $this->hasMany(Activity::class,'Group');
    }
}
