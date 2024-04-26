<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    protected $table = 'detail_penjualans';
    protected $primarykey = 'id_detail';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    
    use HasFactory;
}
