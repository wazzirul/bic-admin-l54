<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class program extends Model
{
    use SoftDeletes;
    //
    protected $table = "program";
    protected $dates = ['deleted_at'];
    protected $fillable = ['judul','deskripsi','harga','dp'];
}
