
@extends('Master.Master')
@section('title', 'Page Title')
	
 @section('content')
 <center>
	 <?php
        echo "<h2 >Infomation User</h2>"; 
    	echo "<b>Họ & tên : </b>".$name ;
    	echo"<p></p>";
        echo "<b>Giới & tính : </b>".$gioitinh ;
        echo"<p></p>";
    	echo "<b>Số điện thoại :</b>".$number;
    	echo"<p></p>";
    	echo "<b>Địa chỉ :</b>".$address;
	?>
      
	</center>
 @endsection