<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at'];
    public $table = 'mahasiswa';
}
