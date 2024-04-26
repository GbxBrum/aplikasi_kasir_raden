<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primarykey = 'id_pelanggan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    use HasFactory;
}
