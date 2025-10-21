<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    // kolom/field yang boleh diisi
    protected $fillable  = ['id','name'];
    public    $timestamp = true;
}
