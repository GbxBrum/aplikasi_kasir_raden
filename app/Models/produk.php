<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    protected $keyType = 'string';

    public $incrementing = false;

    public $guarded = [];
   
}
