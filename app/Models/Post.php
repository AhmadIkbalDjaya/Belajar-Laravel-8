<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    // untk menentuka field yang boleh di isi
    // protected $fillable = ['title', 'excerpt', 'body'];
    // untuk menentukan field tidak boleh diisi
    protected $guarded = ['id'];
}
