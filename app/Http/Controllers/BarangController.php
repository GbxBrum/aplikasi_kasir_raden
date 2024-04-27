<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barangedit($id){
            $q = produk::select('*')->where('id_produk', $id)->get();
            return view ('crudbrang.update',['A'=>$q]);
        
    }
    public function baranged(Request $request, $id){
        $iq = produk::where('id_produk',$id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('admin/infobarang');
    }
    public function hapus($id_produk){
        $siswa = new produk();
        $siswa = $siswa->find($id_produk);
        $siswa->delete();
        return back();
    }
    public function barang(){
        $sipalingcoding = new produk();
        return view('admin.databarang',['gweh'=>$sipalingcoding->all()]);
    }
    public function tambahbarng(){
        return view('crudbrang.create');
    }
    public function tambah(){
        return view('crudbrang.create');
    }
    public function tambahinbarang(request $request){
        $b = new produk();
        $b ->create($request->all());
        return redirect('admin/infobarang');
    }
}
