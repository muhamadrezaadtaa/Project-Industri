<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasProduct extends Model
{
   

    // kolom/field yang boleh diisi
    protected $fillable  = ['id','nama','description','price','stock'];
    public    $timestamp = true;
}
