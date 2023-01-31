<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDesa extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = 'kd_id';
    protected $primaryKey = 'kd_id';
}