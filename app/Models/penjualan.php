<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $table = 'penjualans';
    protected $primarykey = 'id_penjualan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    use HasFactory;
}
