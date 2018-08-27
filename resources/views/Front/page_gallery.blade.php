@extends('navbar')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-gallery.css')}}">
<br>
<div class="container">
  <nav class="breadcrumb">
  <a class="breadcrumb-item" href="{{URL('Homepage')}}">Home</a>
  <a class="breadcrumb-item" href="{{URL('Homepage')}}">Category</a>
  <span class="breadcrumb-item active">Bootstrap</span>
  </nav>
  <br>
    <div class="row">
      @foreach($photos as $photo)
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="{{ URL('uploads/photo/'.$photo->photo)}}">
                <div class="team-content">
                    <h3 class="title">{{$photo->photo_name}}</h3>
                    <span class="post"></span>
                </div>
                <ul class="social">
                    <form action="{{ URL('Edit/'.$photo->photo_name.'/'.$photo->photo_id )}}" method="get">
                      <button class="button-btn edit"><i class="fa fa-edit"></i></button>
                    </form>

                    <form action="{{ URL('Delete/'.$photo->photo_id )}}" method="post">
                      {{csrf_field()}}
                      <button class="button-btn delete"><i class="fa fa-trash"></i></button>
                    </form>
                </ul>
                <div class="icon fa fa-plus"></div>
            </div>
            <br><br>
        </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-2">
        {{ $photos->links()}}
      </div>
      <div class="col-md-5"></div>
    </div>
</div>

<br><br>
<br><br>
<br><br>
<!-- .//container -->
@endsection
