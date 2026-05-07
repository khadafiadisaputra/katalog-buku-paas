<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Mass assignment agar data bisa diinput sekaligus
    protected $fillable = ['judul', 'penulis', 'tahun_terbit'];
}