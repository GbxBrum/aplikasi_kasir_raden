<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutuhController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('adminpetugas.index');
// });

// admin yuri


route::get('lojin', [AutuhController::class, 'login']);
route::post('lojinn', [AutuhController::class, 'loginpost']);

route::prefix('admin')->group(function () {
    route::get('dashboard', [AdminController::class, 'dashadmin']);
    // petugas tambah
    route::get('listpetugas', [AdminController::class, 'list']);
    route::get('tambahpetugas', [AdminController::class, 'regispetugas']);
    route::post('tambahcek', [AdminController::class, 'tambahpetugas']);
    // end  
    route::get('tambahpengguna', [AdminController::class, 'tambahpengguna']);
    
    // hapus admin
    
    
    
    //end
    
    // barang
    route::get('infobarang', [BarangController::class, 'barang']);
    route::get('tambahbarang', [BarangController::class, 'tambahbarng']);
    route::post('tambahkan', [BarangController::class, 'tambahinbarang']);
    // end
    route::get('pelanggan',[AdminController::class,'datapelanggan']);
});


//edit
route::get('edit/{admin}',[AdminController::class,'editmimin']);
route::post('edit/{admin}',[AdminController::class,'admined']);
route::get('editbarang/{id}',[BarangController::class,'barangedit']);
route::post('editbarang/{id}',[BarangController::class,'baranged']);
//end
// edit
Route::get('admin/hapus/{petugasid}',[AdminController::class,'hapus']);
route::get('admin/hapusprod/{id_produk}', [BarangController::class, 'hapus']);

//end

// hapus
// end
// end admins

// kasir
route::prefix('kasir')->group(function () {
    route::get('dashboard',[PetugasController::class, 'dashboard']);

});