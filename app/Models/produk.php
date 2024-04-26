<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produks';
    protected $primarykey = 'id_produk';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    use HasFactory;
}
