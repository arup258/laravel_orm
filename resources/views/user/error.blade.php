@extends('user/app')

@section('main-content')

<div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>404</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">404</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

  <!-- Start error section  -->
  <section id="mu-error">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
          <div class="mu-error-area">
            <p>Oops! The page you requested was not found!</p>
            <span>The page you are looking for is not available or has been removed or changed.</span>
            <h2>404</h2>
            <a class="mu-post-btn" href="{{route('user.error')}}">GO TO HOME</a>
          </div>
        </div>
      </div>
    </div>
  </section>
           
         





@endsection