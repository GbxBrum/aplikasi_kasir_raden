<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class AutuhController extends Controller
{
    public function login(){
        return view('authan.login');
    }
    public function loginpost(Request $request){
        $el = new admin();
        // cek username dan password exists (ada) di tabel masyarakat

        if ($el->where('Username', $request->input('Username'))->where('Password', $request->input('Password'))->exists()) {
            session(['Username' => $request->input('Username')]);
            return redirect('admin/dashboard');
        }
    }

    
}
