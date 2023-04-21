<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement_member extends Model
{
    use HasFactory;
    protected $table='announcements_members';

    protected $fillable=[
        'Type',
        'Description',
        'Id_user',
        'Hour'
    ];

    //Inicio dos metodos responsaveis pela chave estrangeira
    public function users()
    {
        return $this->belongsTo(User::class,'Id_user');
    }
}
