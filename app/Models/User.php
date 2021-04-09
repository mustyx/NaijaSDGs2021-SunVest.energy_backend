<?php

namespace App\Models;

use App\Notifications\VerifyEmailNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, Sluggable, HasRoleAndPermission, HasApiTokens, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username','username_changed','email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'username_changed' => 'boolean',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'userdetails.firstName'
            ]
        ];
    }

    public function userdetail(){
        return $this->hasOne(Userdetail::class);
    }

    public function createdProjects(){
        return $this->hasMany(Project::class,'created_by');
    }

    public function projects(){
        $user = $this;
        return Project::whereHas('investments',function ($q) use($user){
            $q->whereHas('user',function ($q1) use($user){
                $q1->where('id',$user->id);
            });
        })->get();
    }

    public function investments(){
        return $this->hasMany(Investment::class);
    }

    public function sendEmailVerificationNotification(){
        $this->notify(new VerifyEmailNotification());
    }
}
