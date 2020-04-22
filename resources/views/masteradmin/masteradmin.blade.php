@include('/Header/header')
@section('sidebar')
<center>
       *** Kmin-laravel ***
      @show
            <div class = "container">

         @yield('content')

      </div>
</center>
@include('/Footer/Footer')
