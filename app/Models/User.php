<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    const ADMIN = 'RANK1';
    const DOCTOR = 'RANK2';
    /*const PATIENT = 'RANK3';*/
	

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
	use Notifiable;
	
    protected $guarded = [];

    protected $primaryKey = 'user_id';	

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	public function getIdAttribute()
    {
        return $this->user_id;
    }

    public function getFirstNameAttribute()
    {
        return $this->user_first_name;
    }

    public function getLastNameAttribute()
    {
        return $this->user_last_name;
    }

    public function getUsernameAttribute()
    {
        return $this->user_username;
    }

    public function setUsernameAttribute($value)
    {
        $this->attributes['user_username'] = $value;
    }

    public function getIdNumberAttribute()
    {
        return $this->user_id_number;
    }

    public function getPhoneNumberAttribute()
    {
        return $this->user_phone_number;
    }

    public function getRankAttribute()
    {
        return $this->user_rank;
    }

    public function getEmailAttribute()
    {
        return $this->user_email;
    }

    public function setEmailAttribute($email)
    {
        $this->attributes['user_email'] = $email;
    }

    public function getPasswordAttribute()
    {
        return $this->user_password;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['user_password'] = bcrypt($password);
    }

    public function setUserPasswordAttribute($password)
    {
        $this->attributes['user_password'] = bcrypt($password);
    }

    public function getAuthPassword()
    {
        return $this->user_password;
    }

    public function isAdmin(): bool
    {
        return $this->user_rank == self::ADMIN;
    }

    public function isDoctor(): bool
    {
        return $this->user_rank == self::DOCTOR;
    }

    // Relationships
    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'doctor_user_id', 'user_id');
    }

    public function patient()
    {
        return $this->hasOne(Patient::class, 'patient_user_id', 'user_id');
    }
}
