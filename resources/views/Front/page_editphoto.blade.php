@extends('navbar')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-gallery.css')}}">
<!-- .//container -->
<div class="container">
  <nav class="breadcrumb">
  <a class="breadcrumb-item" href="{{URL('Homepage')}}">Home</a>
  <a class="breadcrumb-item" href="{{ URL('Subcategory/'.$category->category_name.'/'.$category->category_id )}}">{{$category->category_name}}</a>
  <a class="breadcrumb-item" href="{{ URL('Gallery/'.$subcategory->subcategory_name.'/'.$subcategory->subcategory_id )}}">{{$subcategory->subcategory_name}}</a>
  <span class="breadcrumb-item active">Update</span>
  </nav>
  <div class="card text-center">
    <form action="{{url('UpdatePhoto')}}" method="Post" enctype="multipart/form-data">
    <div class="card-header bg-dark ">
      <div align="left">
        <h4 style="color:white">Update</h4>
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">
          {{csrf_field()}}
          <div class="form-group">
            <b><label for="photo_name">Category:
              @if ($errors->has('category_id'))
          				<span class="text-danger">{{ $errors->first('category_id') }}</span>
          		@endif
            </lebel></b>
            <select  name="category_id" id="category_id" class="form-control">
              <option disabled selected value="">Please Select Category</option>
              @foreach($categories as $category)
                <option value="{{$category->category_id}}"  {{ (collect(old('category_id'))->contains($category->category_id)) ? 'selected':'' }}>{{$category->category_name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <b><label for="photo_name">Subcategory:
              @if ($errors->has('subcategory_id'))
          				<span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
          		@endif
            </lebel></b>
            <select class="form-control" name="subcategory_id" id="subcategory_id">
                <option disabled selected value="">Please Select Subcategory</option>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <b><label for="photo_name">Photo Name:
                  @if ($errors->has('photo_name'))
              				<span class="text-danger">{{ $errors->first('photo_name') }}</span>
              		@endif
                </label></b>
                <input type="text" value="{{$photo->photo_name}}" name="photo_name" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <b><label for="photo_name">Photo :
                  @if ($errors->has('photo'))
                      <span class="text-danger">{{ $errors->first('photo') }}</span>
                  @endif
                </label></b>
              <input type="file" name="photo" value="{{old ('photo')}}" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <b><label for="photo_name">Status:
              @if ($errors->has('status'))
                  <span class="text-danger">{{ $errors->first('status') }}</span>
              @endif
            </lebel></b>
            <select class="form-control" name="status" id="status">
                @if($photo->status == 'show')
                    <option value="show" selected>Show Image</option>
                @else
                    <option value="show" >Show Image</option>
                @endif
                @if($photo->status == 'hide')
                    <option value="hide" selected>Hide Image</option>
                @else
                    <option value="hide" >Hide Image</option>
                @endif
              </select>
          </div>

      </p>
    </div>
    <div class="card-footer text-muted bg-dark">
      <div align="right">
        <input type="hidden" name="photo_id" value="{{$photo->photo_id}}">
        <button type="submit" class="button-btn edit">Edit</button>
      </div>
    </div>
  </form>
  </div>
</div>
<br><br><br><br><br><br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script>
  $('#category_id').on('change', function(e) {
    console.log(e);
    var cat_id = e.target.value;
    //ajax
    $.get('/getSubcategory?cat_id='+ cat_id,function(data){
      $('#subcategory_id').empty();
      $.each(data,function(index,subcatObj){
        $('#subcategory_id').append('<option value="'+ subcatObj.subcategory_id + '">' + subcatObj.subcategory_name + '</option>');
      });
    });
  });
</script>
@endsection
