@include('user/layout/head')
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  @include('user/layout/navbar')
  <!-- End search box -->
  <!-- Start Slider -->
  @section('main-content')
  @show
  <!-- End from blog -->
  @include('user/layout/footer')
 