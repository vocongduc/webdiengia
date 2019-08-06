<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('e-magazine', function () {
	return view('pages.e-magazine');
})->name('e-magazine');



Route::get('wakeup', function () {
	return view('pages.wakeup');
})->name('wakeup');


Route::get('chuyengiadaotao', function () {
	return view('pages.chuyengiadaotao');
})->name('chuyengiadaotao');


Route::get('banhang', function () {
	return view('pages.banhang');
})->name('banhang');


Route::get('kinhdoanh', function () {
	return view('pages.kinhdoanh');
})->name('kinhdoanh');


Route::get('video', function () {
	return view('pages.video');
})->name('video');

Route::get('/', function () {
    return view('pages.trang-chu');
});
Route::get('/gioi-thieu', function () {
    return view('pages.gioi-thieu');
});
Route::prefix('/')->group(function () {

    Route::get('blog',function(){
        return view('pages.blog');
    });
    Route::get('bai_hoc_cuoc_song',function(){
        return view('pages.bai_hoc_cuoc_song');
    });
    Route::get('chia_se_cuoi_tuan',function(){
        return view('pages.chia_se_cuoi_tuan');
    });
    Route::get('guong_thanh_cong',function(){
        return view('pages.guong_thanh_cong');
    });
    Route::get('kien_thuc_kinh_doanh',function(){
        return view('pages.kien_thuc_kinh_doanh');
    });
    Route::get('phat_trien_ca_nhan',function(){
        return view('pages.phat_trien_ca_nhan');
    });
    Route::get('phong_cach_song',function(){
        return view('pages.phong_cach_song');
    });
  
});
   

Route::get('trang-chu', [
	'as' =>'pages.trang-chu',
	'uses' => 'Controller_1@get_trangchu'
]);

Route::get('tintuc', [
	'as' =>'tintuc',
	'uses' => 'Controller_1@get_tintuc'
]);

Route::get('chitiettintuc', [
	'as' =>'chitiettintuc',
	'uses' => 'Controller_1@get_chitiettintuc'
]);


Route::prefix('lienHe')->group(function () {

    Route::get('/', function () {
        return view('pages.lienHe');
    })->name('lien-he');

});

Route::prefix('quaTang')->group(function () {

    Route::get('/', function () {
        return view('pages.quaTang');
    })->name('qua-tang');

});

Route::prefix('baiViet')->group(function () {

    Route::get('/', function () {
        return view('pages.baiViet');
    })->name('bai-viet');

});
