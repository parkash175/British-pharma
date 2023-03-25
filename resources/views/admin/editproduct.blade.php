@extends('layouts.adminmaster')
@section('content')

 	<div class="content">
			<div class="container-fluid">
					<div class="row">
							<div class="col-md-6">
									<div class="card">
											<div class="header">
													<h2 class="title" style="margin-left:250px;">Insert products</h2>

											</div>

<div class="content" style="margin-top:50px;">
@foreach($product as $value)
<form  action="{{ url('admin/updateproduct')}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
<input type="hidden" value="">
<div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label>product Name</label>
              <input type="hidden" id="pname" value="{{ $value->id }}" name="id" class="form-control">
              <input type="text" id="pname" value="{{ $value->pro_name }}" name="pname" class="form-control">
              @error('pname')
              <span class="invalid-feedback text-left" role="alert">product field is required</span>
                  @enderror
          </div>
      </div>

<div class="col-md-6">
<div class="form-group ">
<label class="">Product code:</label>
<input type="text" id="pname" name="pcode" value="{{ $value->pro_code }}" class="form-control">
@error('pcode')
<span class="invalid-feedback text-left" role="alert">product code field is required</span>
    @enderror
</div>
</DIV>

<div class="col-md-6">
<div class="form-group ">
<label class="col-md- ">Product price:</label>
<input type="text" id="pcode" value="{{ $value->pro_price }}" name="pprice" class="form-control">
@error('pprice')
<span class="invalid-feedback text-left" role="alert">product price field is required</span>
    @enderror
</div>
</div>
  <div class="col-md-6">
<div class="form-group ">
<label class="col-md-">product image:</label>
<input type="file" id="pprice" value=""  name="pimage" class="form-control">
@error('pimage')
<span class="invalid-feedback text-left" role="alert">product image field is required</span>
    @enderror
</div>
</div>
<div class="col-md-12">
<div class="form-group ">
<label class="col-md-">product description:</label>
<input type="text" id="pprice" value="{{ $value->pro_desc }}" name="pdesc" class="form-control">
@error('pdesc')
<span class="invalid-feedback text-left" role="alert">product descrifield is required</span>
    @enderror
</div>
    </div>
  </div>

<div class="row">
<div class="col-md-12 text-center">
<input type="submit" value="Update Product" id="btn" class="btn btn-info btn-fill pull-right">
</div>
</div>
@endforeach
<div class="row">
<div class="col-md-4">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong></strong>
  <button type="submit" class="close"  data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>\
    <div>
    <p>  @if(Session::has('error'))
        {{ session('error') }}
      @endif
      @if(Session::has('success'))
        {{ session('success') }}
      @endif</p>
  </div>
  </button>
</form>
</div>
</div>
</div></div>
</div>
</div>

<div class="col-md-6">
  <div class="card">
      <div class="header">
          <h2 class="title" style="margin-left:250px;">Product detail</h2>
      </div>
      <div class="content">

<div class="row">
<div id="table" class="col-md-12">
<table class="table table-striped">
<thead>
<th>id</th>
<th>pname</th>
<th>product_price</th>
<th>product_image</th>
<th>decription</th>

<th>action</th>
</thead>
@if($product->count() > 0)
@foreach($product as $value)

<tr>
<td>{{ $value->id }}</td>
<td>{{ $value->pro_name }}</td>
<td >{{ $value->pro_price }}</td>
<td ><img src="{{url('images/Products')}}/{{$value->pro_img }}" style="height:80px; width:80px;"></td>
<td >{{ $value->pro_desc }}</td>
<td><a href="{{ URL('admin/view/'.$value->id )}}" class="btn btn-info btn-sm">detail
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="7"><h1 style="text-align:center;">no product found</h1></td>
</tr>
@endif

</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script  src="assets/js/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
//alert("working");
$("btn").click(function(){
  var pro_name=$("pname").val();
  var pro_code=$("pcode").val();
  var pro_price=$("pprice").val();
  var pro_toeken=$("toeken").val();
  $.ajax({
    type="post";
    data: "pro_name="+pro_name+ "&pro_code="+pro_code+"&pro_price="+pro_price+ "&pro_toeken="+pro_toeken,
    url:"<?php echo url('/admin/saveproduct')?>"
  });
});
});
</script>
@endsection
