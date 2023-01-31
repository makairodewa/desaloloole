<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'us_id', 'us_name', 'us_email', 'password', 'rs_id'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'us_email_verified_at' => 'datetime',
    ];

    protected $primaryKey = 'us_id';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }

    public function role()
    {
        return $this->belongsTo(Role::class, 'rs_id', 'rs_id');
    }
}