<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'surname',
        'function',
        'theological_level',
        'contact',
        'userType',
        'password',
        
        //Novas colunas tendo em conta a adicao dos atributos do membro
        'number_bi',
        'profission',
        'baptism',
        'time_of_church',
        'affiliation',
        'File',
        'gender',
        'household',
        'date_of_birth',
        'marital_status',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function departamento()
    {
        return $this->belongsTo(Department::class);
    }
    public function activitys()
    {
        return $this->hasMany(Activity::class,'Id_user');
    }
    public function inputs()
    {
        return $this->hasMany(Input::class,'Id_user');
    }
    public function report_activities()
    {
        return $this->hasMany(ReportActivity::class,'Id_user');    
    }
    public function outputs()
    {
        return $this->hasMany(Output::class,'Id_user');    
    }
    public function announcements()
    {
        return $this->hasMany(Announcement::class,'Id_user');    
    }
    public function announcement_members()
    {
        return $this->hasMany(Announcement_member::class,'Id_user');    
    }
    public function departments()
    {
        return $this->belongsToMany(member_department::class, 'Id_user','Id_department');
    }
}
