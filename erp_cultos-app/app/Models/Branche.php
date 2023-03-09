<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;

    protected $table='Branche';

    protected $fillable=[
        'Name',
        'Creation_year',
        'Address',
        'Id_user',
        'Number_of_members',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function name($id)
    {
        return User::find($id)->name;
    }
}
