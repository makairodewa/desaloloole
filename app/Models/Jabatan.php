<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $guarded = ['jb_id'];
    protected $primaryKey = 'jb_id';
    use HasFactory, HasUuids;
}
