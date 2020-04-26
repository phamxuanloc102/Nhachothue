@extends('masterdisplay.masterdisplay')
@section('title', 'Trang tìm  kiếm nhà Homedy')

 @section('sidebar')

   @parent
 
   @endsection

      @section('content')
      <p></p>
      <div style="width:100%; height:80px;background-color:#fadf84;padding-top: 26px;padding-left: 15px">
          <form action="#" method="">
            @csrf
            <div class="col-xs-6">
                <select class="selectpicker">
                  <option >  Danh mục</option>
                  <option > - Cho thuê phòng trọ</option>
                  <option > - Cho thuê nhà nguyên căn </option>
                  <option > - Tìm người ở ghép</option>
                  <option > - Cho thuê mặt bằng</option>
                </select>
                <select  class="selectpicker">
                  <option >Quận huyện</option>
                  <option >- Quận 1</option>
                  <option >- Quận 2</option>
                  <option >- Quận 3</option>
                  <option >- Quận 4</option>
                  <option >- Quận 5</option>
                  <option >- Quận 6</option>
                  <option >- Quận 7</option>
                  <option >- Quận 8</option>
                  <option >- Quận 9</option>
                  <option >- Quận 10</option>
                  <option >- Quận 11</option>
                  <option >- Huyện Bình Chánh</option>
                  <option >- Hooc môn</option>

                </select>
                 <select class="selectpicker" >
                  <option >Tên đường </option>
                  <option ></option>

                </select>
                 <select class="selectpicker" >
                  <option >Khoảng giá</option>
                  <option >- 3 Triệu-> 5 Triệu</option>
                  <option >- 5 Triệu-> 7 Triệu</option>
                  <option >- 7 Triệu->8 Triệu</option>
                  <option >- 9 Triệu-> 10 Triệu</option>
                </select>
                 <select class="selectpicker" >
                  <option >Diện tích</option>
                  <option >- 5 m2->6 m2</option>
                  <option >- 7 m2->8 m2</option>
                  <option >- 10 m2->13 m2</option>
                  <option >- 15 m2->17 m2</option>
                </select>
                 <select class="selectpicker" >
                  <option >Thời gian đăng</option>
                  <option >- Trong vòng 03 ngày </option>
                  <option >- Trong vòng 07 ngày</option>
                  <option >- Trong vòng 15 ngày</option>
                  <option >- Trong vòng 30 ngày</option>
                </select>
                <button type="submit" class="btn btn-primary">Lọc Tin</button>
          </div>
        </form>
  </div>  

    
      <div class="container mt-4">
<!-- Slideshow + tin nóng -->
	<div class="row">
		<div class="col-md-9"></div>
		<div id="slideshow" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
 

  <ul class="carousel-indicators">
    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow" data-slide-to="1"></li>
    <li data-target="#slideshow" data-slide-to="2"></li>
    <li data-target="#slideshow" data-slide-to="3"></li>
  </ul>  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL::asset('IMG/b.jpg') }}" alt="Slide 0">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('IMG/b.png') }}" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('IMG/c.png') }}" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('IMG/d.png') }}" alt="Slide 3">
    </div>
  </div>  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slideshow" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

		<div class="col-md-3 tinnong">
   			<h4 class="bg-danger text-white text-center p-1">Tin nóng </h4>
   		<ul>
			<li><a href="#">Nhà cho thuê nguyên căn Quận 4 giá cả thương lượng :(7tr->9tr)</a></li>
			<li><a href="#">Tìm người ở ghép phòng ốc sạch sẽ bao điện nước</a></li>
			<li><a href="#">Phòng trọ cho thuê mới xây sạch sẽ có Camera an ninh Q.Gò vấp 		</a></li>
			<li><a href="#">Phòng trọ  sinh viên ,an ninh tốt ,bao nước điện tính riêng 			</a></li>
			<li><a href="#">Cho thuê mặt bằng quán 4m*10m .Đường    Tiên Hoàng,Quận.Bình Thạnh</a></li>
   		</ul>
	  	</div>
	</div>
</div>




    <!-- Nhà cho thuê + Tìm người ở ghép -->
    <div class="row mt-4">
      <div class="col-md-8">
          <div class="row mb-3">
              <div class="col-12">
              <div class="title-section">
              <h4 class="bg-danger p-3 text-white">Nhà trọ cho thuê</h4>
              </div>
          </div>
          </div>

        <div class="row">

    @foreach($baiviet as $tl)
       @if($tl->level==1)
        <div class="col-md-6 mb-2">
          <div class="card w-100">
            <img class="card-img-top" src="{{asset($tl->hinhanh) }}" alt="Để nhà cho thuê như thế nào?">
              <div class="card-body">
                <h5 class="card-title" style="color:#91192b">{{$tl->tieude }}</h5>
                <h6 class="card-title">-Chủ nhà:{{$tl->tennguoidang }}</h6>
                  <p class="card-title">-SĐT :{{$tl->sodienthoai }}</p>
                  <p class="card-text line-clamp-2">Nhà trọ cho thuê</p>        
              </div>
            </div>
          </div>
         @endif 
    @endforeach
    <div href="{{ URL::asset('IMG/nhachothue/a.png') }}"></div>
  </div>
</div>


      <div class="col-md-4">
          <div class="row mb-3">
            <div class="col-12">
          <div class="title-section">
          <h4 class="bg-danger p-3 text-white">Tìm người ở ghép</h4>
          </div>
        </div>
          </div>
        <div class="row">
        @foreach($baiviet as $tl)
          @if($tl->level==2)
          <div class="col-md-12 mb-2">
            <div class="card w-100">
                <div class="row">
                  <div class="col-5">
                    <img class="card-img-top" src="{{asset($tl->hinhanh) }}" alt="Tìm người ở ghép?">
                  </div>
                  <div class="col">
                      <div class="card-body p-0">
                      <h6 class="card-title line-clamp-2" style="color:#91192b">{{$tl->tieude }}</h6>
                      <p class="card-time">Tìm người ở ghép</p> 
                      <p class="card-time">10/10/2019 10:10</p>         
                    </div>
                  </div>
                </div>
            </div>
          </div>
           @endif 
    @endforeach
        </div>
        </div>
    </div>
</div>


    <!-- Công tác giáo dục + phong trào -->
    <div class="row mt-4">
      <div class="col-md-8">
          <div class="row mb-3">
                <div class="col-12">
                <div class="title-section">
                <h4 class="bg-danger p-3 text-white">Nhà thuê nguyên căn</h4>
                </div>
            </div>
          </div>

        <div class="row">
        @foreach($baiviet as $tl)
          @if($tl->level==3)
          <div class="col-md-4 mb-2">
            <div class="card w-100">
              <a href="#">
              <img class="card-img-top" src="{{asset($tl->hinhanh) }}" alt="Nhà nguyên căn?">
                <div class="card-body">
                  <h5 class="card-title" style="color:#91192b">{{$tl->tieude }}</h5>
                  <h6 class="card-title">-Chủ nhà:{{$tl->tennguoidang }}</h6>
                  <p class="card-title">-SĐT :{{$tl->sodienthoai }}</p>
                  <p class="card-text line-clamp-2">Nhà cho thuê nguyên căn</p>       
                </div>
               </a>
            </div>
          </div>
           @endif 
        @endforeach
        </div>
    </div>


    <div class="col-md-4">
        <div class="row mb-3">
            <div class="col-12">
              <div class="title-section">
                <h4 class="bg-danger p-3 text-white">Cho thuê măt bằng</h4>
              </div>
            </div>
        </div>
     @foreach($baiviet as $tl)
       @if($tl->level==4) 
        <div class="row">
             <div class="col-md-12 mb-2">
               <div class="card w-100">
                <div class="row">
                  <div class="col-5">
                    <img class="card-img-top" src="{{asset($tl->hinhanh) }}" alt="Cho thuê mặt bằng?">
                  </div>
                  <div class="col">
                    <div class="card-body p-0">
                      <h5 class="card-title" style="color:#91192b">{{$tl->tieude }}</h5>
                      <p class="card-title">-SĐT :{{$tl->sodienthoai }}</p>
                      <p class="card-time">10/10/2019 10:10</p>     
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div> 
        @endif 
      @endforeach 
    </div>

    </div>
    <!-- Tiêu đề hình ảnh hoạt động  -->
      <div class="row mt-4 mb-3">
        <div class="col-12">
        <div class="title-section">
          <h4 class="bg-danger p-3 text-white">Hình ảnh hoạt dộng của web</h4>
        </div>
        </div>      
      </div>
    <!-- Slideshow hình ảnh-->
      <div class="row">
        <div class="col-md-12">
    <div id="slideshowHinhAnh" class="carousel slide" data-ride="carousel">     
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-4">
              <img src="{{ URL::asset('IMG/matbang/14.jpg') }}" alt="Hình 0">
            </div>
            <div class="col-4">
              <img src="{{ URL::asset('IMG/matbang/13.jpg') }}" alt="Hình 1">
            </div>
            <div class="col-4">
              <img src="{{ URL::asset('IMG/matbang/14.jpg') }}" alt="Hình 2">
            </div>
          </div>
        </div>
        
      </div>
  
      
 @endsection