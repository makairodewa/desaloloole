<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDesa extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = 'ktd_id';
    protected $primaryKey = 'ktd_id';
}
