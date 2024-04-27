<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function dashboard(){
        return view('petugas.dahsboardkasir');
    }
    public function tambahpengguna(){
        return view('crudpengguna.create');
    }
}
