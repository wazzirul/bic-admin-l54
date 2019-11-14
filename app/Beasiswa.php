<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Beasiswa extends Model
{
    use SoftDeletes;
    //
    protected $table = 'beasiswa';
    protected $dates = ['deleted_at'];
    protected $fillable = ['judul','subtitle','deskripsi'];
}
