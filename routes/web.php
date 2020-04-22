<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use app\admin;
use Illuminate\Http\Request;

//admin
	Route::group(['prefix'=>'Admin'], function () {
		Route::get('/quanlybaiviet','Controller_Admin@quanlybaiviet');
		Route::get('/quanlydanhmuc','Controller_Admin@quanlydanhmuc');
		Route::get('/quanlykhachhang','Controller_Admin@quanlykhachhang');
		Route::get('/thongke','Controller_Admin@thongke');
		Route::get('/trangchinh','Controller_Admin@trangchinh');
		Route::get('/dangnhap[','Controller_Admin@dangnhapadmin');
		Route::post('/dangnhap','Controller_Admin@xulydangnhap');
	});


//user
	 Route::group(['prefix'=>'Home'],function(){
	 	Route::get('/banggiadichvu','Controller_Home@banggiadichvu');
	 	Route::get('/chothuematbang','Controller_Home@chothuematbang');
	 	Route::get('/chothuenhanguyencan','Controller_Home@chothuenhanguyencan');
	 	Route::get('/chothuephongtro','Controller_Home@chothuephongtro');
	 	Route::get('/dangky','Controller_Home@dangky');
	 	Route::get('/dangnhap','Controller_Home@dangnhap');
	 	Route::get('/dangtin','Controller_Home@dangtin');
	 	Route::get('/huongdan','Controller_Home@huongdan');
	 	Route::get('/thanhtoan','Controller_Home@thanhtoan');
	 	Route::get('/timnguoioghep','Controller_Home@timnguoioghep');
	 	Route::get('/trangchu','Controller_Home@trangchu2');
	 });




	Route::get('Home/ok',function(){	
	 for($i=0;$i<1;$i++)
	 {	
		$baiviet=new App\baiviet();
		$baiviet ->level=3;
		$baiviet ->tennguoidang="	Huy Cường";
		$baiviet ->sodienthoai="0339672794";
		$baiviet ->tieude="Phòng trọ Gò vấp Full nội thất - Nhà mới xây - Giá 2,5tr";
		$baiviet ->sonha="15/29";
		$baiviet ->tenduong="Đường C1,";
		$baiviet ->phuong="Phường 13";
		$baiviet ->quan="Quận Tân Bình";
		$baiviet ->dientich="20m²";
		$baiviet ->giatien="2.5 triệu/tháng";
		$baiviet ->noidung="VỊ TRÍ:

+ Nằm ngay đường Cộng Hòa, Cách ETOWN 300m, gần khu chợ Hoàng Hoa Thám, các cửa hàng tiện ích ( Family Mart, Vinmart …), Thế Giới Di Động, Điện Máy Xanh

- Trong khu dân cư an ninh và cực kỳ yên tĩnh, hẻm xe hơi.

+ GIÁ PHÒNG :

- Phòng có cửa sổ, tủ đồ, giường (full chăn, dra, gối, nệm), diện tích 20m2 : 3,5tr/tháng

- Phòng có cửa sổ, có tủ đồ, máy lạnh, tủ lạnh, giường (full chăn, dra, gối, nệm), mặt tiền hướng gió trời, diện tích 22m2 : 3,8tr/tháng";
		$baiviet ->hinhanh="a.jpg";
		$baiviet ->save();
		echo"đã thực hiện thành công save()";
	 }
	});



	Route::get('Home/show',function(){	
		$ok= App\ok::where('ten','iphone6')->get()->toArray();
		var_dump($ok);
		echo $ok[0]['ten'];
	});
