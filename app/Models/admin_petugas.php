<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_petugas extends Model
{
    protected $table ='admin_petugas';
    protected $primarykey = 'id_petugas';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [''];
    
    use HasFactory;
}
