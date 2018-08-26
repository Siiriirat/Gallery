@extends('navbar')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-gallery.css')}}">
<br>
<div class="container">
  <h1>UpdatePhoto</h1>
  <form action="{{url('UpdatePhoto')}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    @if ($errors->has('photo_name'))
				<span class="text-danger">{{ $errors->first('photo_name') }}</span>
		@endif
    <input type="text" value="{{$photo->photo_name}}" name="photo_name" class="form-control">
    <br>
    @if ($errors->has('category_id'))
				<span class="text-danger">{{ $errors->first('category_id') }}</span>
		@endif
    <select  name="category_id" id="category_id" class="form-control">
      <option disabled selected value="">Please Select Category</option>
      @foreach($categories as $category)
        <option value="{{$category->category_id}}"  {{ (collect(old('category_id'))->contains($category->category_id)) ? 'selected':'' }}>{{$category->category_name}}</option>
      @endforeach
    </select>
    <br>
    @if ($errors->has('subcategory_id'))
				<span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
		@endif
    <select class="form-control" name="subcategory_id" id="subcategory_id">
        <option disabled selected value="">Please Select Subcategory</option>
    </select>
    <br>
    @if ($errors->has('photo'))
				<span class="text-danger">{{ $errors->first('photo') }}</span>
		@endif
    <input type="file" name="photo" class="form-control">
    <br>
    @if ($errors->has('status'))
				<span class="text-danger">{{ $errors->first('status') }}</span>
		@endif
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
    <br>
    <input type="hidden" name="photo_id" value="{{$photo->photo_id}}">
    <button type="submit" class="button-btn edit">Update</button>

  </form>
</div>
<!-- .//container -->
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
