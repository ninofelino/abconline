<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'id';
     protected $fillable = ['barcode','gambar', 'style','category'];
}
