<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // kolom/field yang boleh diisi
    protected $fillable  = ['id','name_kelas'];
    public    $timestamp = true;

    public function telepon()
    {
        return $this->hasMany(Telepon::class);
    }
}
