<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      //Quản tri (Adimin&user)
    public function dangnhapadmin(){
       return view ('/Admin/dangnhap',['name'=>' Đăng nhập']);
    }
     public function xulydangnhapadmin(){
       return view ('/Admin/dangnhap',['name'=>' Đăng nhập']);
    }
     public function quanlybaocaonguoidung(){
        return view('/Admin/quanlybaocaonguoidung',['name'=>' Quản lý báo cáo người dùng ']);
    }
     public function quanlykhachhang(){
        return view('/Admin/quanlykhachhang',['name'=>' Quản lý khách hàng ']);
    }
     public function quanlybaiviet(){
        return view('/Admin/quanlybaiviet',['name'=>' Quản lý bài viết ']);
    }
     public function thongke(){
        return view('/Admin/thongke',['name'=>' Thống kê phòng trọ ']);
    }

     public function quanlydanhmuc(){
        return view('/Admin/quanlydanhmuc',['name'=>' Quản lý danh mục ']);
    }
     public function trangchinh(){
       return view ('/Admin/Trangchinh',['name'=>'Trang chính']);
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
