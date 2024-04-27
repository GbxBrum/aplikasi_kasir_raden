<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\admin_petugas;
use App\Models\produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashadmin(){
        return view('admin.index');
    }
   
    public function list(){
        $codingakut  = new admin();
        return view('admin.datapetugas',['burnbrain'=>$codingakut->all()]);
    }

    // alamawe
    public function regispetugas(){
        return view('crudpetugas.create');
    }
    public function tambahpetugas(Request $request){
        $a = new admin();
        $a -> create($request->all());
        return redirect('admin/listpetugas');
         
    }
    // edit
    public function editmimin($admin){
        $q = admin::select('*')->where('petugasid', $admin)->get();
        return view ('crudpetugas.update',['bug'=>$q]);
    }
    public function admined(Request $request, $admin){
        $iq = admin::where('petugasid',$admin)->update([
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'nama_lengkap' => $request->nama_lengkap,
            'role' => $request->role,   
            'alamat' => $request->alamat
        ]);
        return redirect('admin/listpetugas');
    }

    
    public function hapus($petugasid){
        $siswa = new admin();
        $siswa = $siswa->find($petugasid);
        $siswa->delete();
        return back();
    }

    public function datapelanggan(){
        return view('admin.datapelanggan');
    }

    
}
