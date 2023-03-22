<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table="departments";

    protected $fillable=[
        'Name'
    ];
    
    //Inicio do metodo responsavel por ligar as tabelas
    public function Departments()
    {
        return $this->belongsToMany(Department::class, 'department_member');
    }
}
