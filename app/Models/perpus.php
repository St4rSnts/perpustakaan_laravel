<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpus extends Model
{
    // laravel akan menganggap tabel=jamak, 
    // nama model singgle, maka di tambahkan "protected $table='Perpus';" 
    use HasFactory;
    protected $table='Perpus';
    protected $guarded = [];
}