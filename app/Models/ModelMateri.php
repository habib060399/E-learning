<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMateri extends Model
{
    use HasFactory;

    protected $table = "materi";
    protected $primaryKey = "materi_id";
}
