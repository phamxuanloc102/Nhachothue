@extends('masterdisplay.masterdisplay')
@section('title', 'Page Title')
    @section('content')
    <center>
    <form action='/btvn/profile' method="post" role="form">
        <h2>Infomartion User</h2>
        {{ csrf_field()}}
         Họ  &  tên   : <input id=t type="text" name="name" id=name placeholder=" Nhập tên" >
        <p></p>
         Số_Điện_Thoại: <input id=t type="number" name='number' id=number placeholder=" Nhập số Phone " />
        <p></p>
         Địa chỉ      : <input id=t type="text" name='address' id=address placeholder=" Nhập địa chỉ" />
        <p></p>
         Giới tính    :<input name="gioitinh" type="radio" value="Nam" />Nam
         <input name="gioitinh" type="radio" value="Nữ" />Nữ
         <p></p>
        <input style=" width:200px;height: 50px;border-radius: 15px; background-color: tomato;color:whitesmoke" type="submit"  value="Submit">
    </form>
      <p><h1>Well come Kmin laravel !!!.</h1></p>
    </center>
 @endsection