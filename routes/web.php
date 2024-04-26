<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('adminpetugas.index');
// });

// admin yuri
route::get('dashadmin', [AdminController::class, 'dashadmin']);


route::get('lojin', [AdminController::class, 'login']);
route::post('lojinn', [AdminController::class, 'loginpost']);

route::prefix('admin')->group(function () {
    // petugas tambah
    route::get('listpetugas', [AdminController::class, 'list']);
    route::get('tambahpetugas', [AdminController::class, 'regispetugas']);
    route::post('tambahcek', [AdminController::class, 'tambahpetugas']);

    
    // end  
    // barang
    route::get('infobarang', [AdminController::class, 'barang']);
    // end
});
route::get('edit{admin}',[AdminController::class,'editmimin']);
