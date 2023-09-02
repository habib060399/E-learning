<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learnings extends Model
{
    use HasFactory;

    protected $table = "learnings";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['judul', 'konten', 'created_at'];
}
