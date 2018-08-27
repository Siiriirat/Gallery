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
            <img class="d-block w-100" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/images/18q1/699328/2018-bmw-m5-vs-cadillac-cts-v-mercedes-amg-e63-s-porsche-panamera-turbo-comparison-test-car-and-driver-photo-705046-s-original.jpg" alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="https://nutcado96.files.wordpress.com/2014/01/ford-mustang-tuning-sport-cars-luxury-in-the-street-car-pictures-wallpaper-hd.jpg" alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/images/18q1/705046/2018-cadillac-cts-v-photo-705048-s-original.jpg?crop=1xw:1xh;center,center&resize=900:*" alt="Third slide">
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
