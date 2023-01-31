<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;
    protected $primaryKey = 'rs_id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'rs_id', 'rs_name'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->rs_id = (string) Str::uuid();
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}