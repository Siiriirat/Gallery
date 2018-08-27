@extends('navbar')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-gallery.css')}}">
<style type="text/css">
  .carousel-item {
    height: 500px;
  }
  @media only screen and (max-width: 600px) {
    .carousel-item {
      height: 250px;
      width: 100%;
    }
  }
</style>
<div id="carousel-example-1z" class="carousel slide carousel-fade" style="margin-top: -70px;" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="https://www.gettyimages.ie/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
</div>
<!--/.Carousel Wrapper-->
<br>
<div class="container">
  <div class="row">
    @foreach($categories as $category)
      <div class="col-md-4 ">
          <div class="our-team">
              <img src="{{ URL('uploads/category/'.$category->category_photo)}}">
              <div class="team-content">
                  <h3 class="title">{{$category->category_name}}</h3>
                  <span class="post"></span>
              </div>
              <ul class="social">

              </ul>
              <a href="{{ URL('Subcategory/'.$category->category_name.'/'.$category->category_id )}}">
                <div class="icon fa fa-eye"></div>
              </a>
          </div>
          <br><br>
      </div>
    @endforeach
   </div>
   <div class="row">
     <div class="col-md-5"></div>
     <div class="col-md-2">
       {{ $categories->links()}}
     </div>
     <div class="col-md-5"></div>
   </div>
</div>
<!-- .//container -->

@endsection
