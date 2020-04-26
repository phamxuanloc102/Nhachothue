@extends('masterdisplay.masterdisplay')
@section('title', 'Page Title')

 @section('sidebar')

   @parent
<div class="dangbai">
	<form class="from" action="{{ url('/Home/show') }}"  method="post">
		<h2>From Đăng tin</h2>

			<div class="col-md-10">
				<label for="first">Tên người đăng *</label>
				<input class="form-control" type="text"  id=1 name="tennguoidang" >
				<label for="first">Số điện thoại *</label>
				<input class="form-control" type="text"  id=1 name="sodienthoai" >
				<label for="first">Tiêu đề bài viết *</label>
				<input  class="form-control" type="text"  id=1 name="tieude" >
			<ul >
				
				<li class="li"><input class="form-control" type="text"  id=1 name="sonha" placeholder="Số nhà"></li>
				
				<li class="li"><input class="form-control" type="text" id=1 name="tenduong" placeholder="Tên Đường"></li>
				
				<li class="li"><input class="form-control" type="text"  id=1 name="phuong" placeholder="Phường"></li>
			
				<li class="li"><select  id=1 class="form-control" name="quan">
				  <option > Quận </option>	
                  <option > Quận 1</option>
                  <option > Quận 2</option>
                  <option > Quận 3</option>
                  <option > Quận 4</option>
                  <option > Quận 5</option>
                  <option > Quận 6</option>
                  <option > Quận 7</option>
                  <option > Quận 8</option>
                  <option > Quận 9</option>
                  <option > Quận 10</option>
                  <option > Quận 11</option>
                  <option > Quận 12</option>
                  <option > Quận Bình Thạnh</option>
                  <option > Quận Tân Bình</option>
                  <option > Quận Bình Tân</option>
                  <option > Quận Tân phú</option>
                  <option > Huyện Bình Chánh</option>
                  <option > Hooc môn</option>
              	</select></li>
              </ul>
				<label for="first">Diện tích *</label>
				<input class="form-control" type="text"  id=1 name="dientich" >
				<label for="first">Giá tiền *</label>
				<input class="form-control" type="text"  id=1 name="giatien" >
				<label for="first">Nội dung *</label>
				<textarea class="form-control" rows="5" cols="20" ></textarea>
				<label for="first">Hình ảnh *</label>
				<input class="form-control" type="text"  id=1 name="hinhanh" >
				<p></p>
				<center>
				<input  style=" width:200px;height: 50px;border-radius: 15px; background-color: tomato;color:whitesmoke" type="submit"  	value="Submit">
				</center>
			</div>			
	</form>

</div>

   @endsection

      @section('content')

 @endsection
