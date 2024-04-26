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

    // hapus admin
    route::get('hapus/{admin}', [AdminController::class, 'adminhapus']);

    //end
    
    // barang
    route::get('infobarang', [AdminController::class, 'barang']);
    route::get('tambahbarang', [AdminController::class, 'tambahbarng']);
    route::post('tambahkan', [AdminController::class, 'tambahinbarang']);
    // end
});
//edit
route::get('edit/{admin}',[AdminController::class,'editmimin']);
route::post('edit/{admin}',[AdminController::class,'admined']);
//end
// edit

//end

// hapus
// end