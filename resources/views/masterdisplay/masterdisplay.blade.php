@include('/Header/header')
@section('sidebar')
      @show
            <div class = "container">

         @yield('content')

      </div>
@include('/Footer/Footer')
