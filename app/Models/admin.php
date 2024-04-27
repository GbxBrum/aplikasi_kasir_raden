<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'petugasid';
    protected $keyType = 'string';

    public $incrementing = false;

    public $guarded = [];
    
}
