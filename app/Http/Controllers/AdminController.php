<?php

namespace App\Http\Controllers;

use App\Models\admin_petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashadmin(){
        return view('admin.index');
    }
    public function login(){
        return view('authan.login');
    }
    public function loginpost(Request $request){
        $el = new admin_petugas();
        // cek username dan password exists (ada) di tabel masyarakat

        if ($el->where('Username', $request->input('Username'))->where('Password', $request->input('Password'))->exists()) {
            session(['Username' => $request->input('Username')]);
            return redirect('dashadmin');
        }
    }
    public function list(){
        $codingakut  = new admin_petugas();
        return view('admin.datapetugas',['burnbrain'=>$codingakut->all()]);
    }
    public function barang(){
        return view('admin.databarang');
    }
    public function tambahbarng(){
        return view('crudbrang.create');
    }
    public function tambah(){
        return view('crudbrang.create');
    }

    // alamawe
    public function regispetugas(){
        return view('crudpetugas.create');
    }
    public function tambahpetugas(Request $request){
        $a = new admin_petugas();
        $a -> create($request->all());
        return view('crudpetugas.create');
         
    }
    // edit
    public function editmimin($admin){
        $q = admin_petugas::select('*')->where('id_petugas', $admin)->get();
        return view ('crudpetugas.create',['bug'=>$q]);
    }
    public function admined(Request $request, $admin){
        $iq = admin_petugas::where('id_petugas',$admin)->update([
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'role' => $request->role,
            'alamat' => $request->alamat
        ]);
        return redirect('admin/listpetugas');
    }
}
