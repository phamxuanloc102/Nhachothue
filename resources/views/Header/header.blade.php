<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>@yield('title')</title>
    <link href="{{ URL::asset('CSS/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ URL::asset('CSS/all.min.css') }}" rel="stylesheet" >
     <link href="{{ URL::asset('CSS/style.css') }}" rel="stylesheet" >  
   
</head>
<body>   
    <!-- Top header -->
   <div id="top-header" class="top-header bg-danger">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="d-flex align-items-center">
                  <div class="p-2 mr-auto">
                     <img class="img-fluid" src="{{ URL::asset('IMG/logo1.png') }}" alt="logo website">
                  </div>
                  <div class="d-flex p-2 align-items-center">
                     <div class="login mr-md-2 mr-lg-5">
                        <a class="mr-3"   href="#">Đăng nhập</a>
                        <a href="#">Đăng ký</a>
                     </div>                     
                     <div class="search-form">
                        <form action="#" method="post">
                           <input type="search" name="search" class="form-control" placeholder="Search">
                           <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Menu -->
   <div class="menu bg-light ">
      <div class="container">       
         <nav class="navbar navbar-expand-md navbar-light">         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav w-100 justify-content-around">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{ URL::asset('Home/trangchu') }} ">Trang chủ |<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ URL::asset('Home/chothuephongtro') }} ">Cho thuê phòng trọ |</a>
                  </li>      
                   <li class="nav-item">
                     <a class="nav-link" href="{{ URL::asset('Home/chothuenhanguyencan') }} ">Nhà cho thuê  |</a>
                  </li>   
                   <li class="nav-item">
                     <a class="nav-link" href="{{ URL::asset('Home/timnguoioghep') }} ">Tìm người ở ghép |</a>
                  </li>   
                   <li class="nav-item">
                     <a class="nav-link" href="{{ URL::asset('Home/chothuematbang') }} ">Cho thuê mặt bằng |</a>
                  </li>  
                  <li class="nav-item">
                     <a class="nav-link" href="{{ URL::asset('Home/banggiadichvu') }} ">Bảng giá |</a>
                  </li>       
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHoatDong" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hướng dẫn 
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownHoatDong">
                        <a class="dropdown-item" href="{{ URL::asset('Home/huongdan') }} ">Hướng dẫn đăng bài</a>
                        <a class="dropdown-item" href="{{ URL::asset('Home/huongdan') }} ">Hướng dẫn thanh toán</a>     
                        <a class="dropdown-item" href="{{ URL::asset('Home/huongdan') }} ">Hướng dẫn cập nhật</a>    
                        <a class="dropdown-item" href="{{ URL::asset('Home/huongdan') }} ">Hướng dẫn ........</a>                  
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
