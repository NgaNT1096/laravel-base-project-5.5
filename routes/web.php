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
Route::group(['middleware' => ['lang']], function() {
	Route::get('/', function(){
		return redirect('admin/login');
	});

	Route::post('contact/them','MessageController@XuLyThemMessage');

	Route::get('dang-nhap','HomeController@Login');

	Route::post('dang-nhap','HomeController@LoginAuth');

	Route::get('dang-xuat','HomeController@Logout');

	Route::get('quan-ly-thong-tin','HomeController@UserConf');

	Route::post('quan-ly-thong-tin','HomeController@ExUserConf');

	Route::get('dang-ky-tai-khoan','HomeController@Register');

	Route::post('dang-ky-tai-khoan','HomeController@DoRegister');

	Route::get('admin/login','UserController@Login');

	Route::post('admin/login','UserController@LoginAuth');

	Route::get('admin/logout','UserController@Logout');

	Route::get('show','Admin\Tour360Controller@show');
});



// Khai báo Middleware trong Kernel trước thì mới sử dụng tại Route được, gom tất cả những cái cần thiết trong trang admin, vào group prefix admin để sử dụng middleware bảo mật cho trang admin.
Route::group(['prefix' => 'admin','middleware' => 'adminAuth'],function(){

	Route::get('/','Admin\AdminController@index');

	// Route group User
	Route::group(['prefix' => 'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('them','UserController@Them');

		Route::post('them','UserController@XuLyThemUser');

		Route::get('sua/{id}','UserController@Sua');

		Route::post('sua/{id}','UserController@XuLySuaUser');

		Route::get('xoa/{id}','UserController@Xoa');
	});

	// Route group Ajax
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('layloaitin/{idTheLoai}','AjaxController@getLoaiTin');

		Route::get('timestamp','AjaxController@timestamp');
	});

	//  Route group tour 360
	Route::group(['prefix' => 'tour'],function(){
		Route::get('danhsach','Admin\Tour360Controller@getDanhSach');
		
		Route::get('them','Admin\Tour360Controller@Them');

		Route::post('them','Admin\Tour360Controller@XuLyThemTT');

		Route::get('sua/{id}','Admin\Tour360Controller@getSua');

		Route::post('sua/{id}','Admin\Tour360Controller@XuLySuaTT');

		Route::get('xoa/{id}','Admin\Tour360Controller@Xoa');
	});
});

Route::group(['prefix' => 'client'],function(){

});