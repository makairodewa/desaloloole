<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemerintahDesa extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = ['pmd_id'];
    protected $primaryKey = 'pmd_id';
}
