<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ok;
use App\baiviet;

class Controller_Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function trangchu1()
    {
        $ok=ok::all();
        return view('/Home/trangchu',['ok'=>$ok]);
    }

    function trangchu2()
    {
        $baiviet=baiviet::all();
        return view('/Home/trangchu',['baiviet'=>$baiviet]);
    }

    

    public function dangbai(){
        return view('/Home/dangbai');
    }

     public function banggiadichvu(){
       return view ('/Home/banggiadichvu',['name'=>'bảng giá dịch vụ']);
    }
     public function chothuechungcu(){
        return view ('/Home/chothuechungcu',['name'=>' cho thuê chung cư']);
    }
     public function chothuematbang(){
        return view ('/Home/chothuematbang',['name'=>' cho thuê mặt bằng']);
    }
     public function chothuenhanguyencan(){
       return view ('/Home/chothuenhanguyencan',['name'=>' cho thuê nhà nguyên căn']);
    }
     public function chothuephongtro(){
        return view ('/Home/chothuephongtro',['name'=>' cho thuê phòng trọ']);
    }
     public function dangnhap(){
       return view ('/Home/dangnhap',['name'=>' Đăng nhập']);
    }
     public function dangky(){
        return view ('/Home/dangky',['name'=>' Đăng ký']);
    }
     public function huongdan(){
        return view ('/Home/huongdan',['name'=>' hướng dẫn']);
    }
     public function timnguoioghep(){
        return view ('/Home/timnguoioghep',['name'=>' tìm người ở ghép']);
    }
     public function dangtin(){
        return view ('/Home/dangtin',['name'=>'  đăng tin']);
    }
     public function thanhtoan(){
        return view ('/Home/thanhtoan',['name'=>' thanh toán']);
    }
    public function trangchu(){
        return view ('/Home/trangchu');
    }
    public function trave()
    {
        $ok= App\ok::where('ten','iphone6')->get()->toArray();
        var_dump($ok);
        return view('/Home/show');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/Home/dangbai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $baiviet = new baiviet;
        $baiviet->tenguoidang = $request->tenguoidang; 
        $baiviet->sodienthoai = $request->sodienthoai;
        $baiviet->tieude = $request->tieude;
        $baiviet->sonha = $request->sonha;
        $baiviet->tenduong = $request->tenduong;
        $baiviet->phuong = $request->phuong;
        $baiviet->quan = $request->quan;
        $baiviet->dientich = $request->dientich;
        $baiviet->giatien = $request->giatien;
        $baiviet->noidung = $request->noidungn;
        $baiviet->hinhanh = $request->hinhanh;
        $baiviet->save();
        return redirect()->action('/Home/Controller_Home@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
