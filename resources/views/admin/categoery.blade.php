@extends('layouts.adminmaster')
@section('content')

 	<div class="content">
			<div class="container-fluid">
					<div class="row">
							<div class="col-md-6">
									<div class="card">
											<div class="header">
													<h2 class="title" style="margin-left:250px;">Insert Categoery</h2>

											</div>

<div class="content" style="margin-top:50px;">

<form  action="{{ url('admin/categoeryinsert')}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}
<input type="hidden" value="">
<div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label>Categoery Name</label>
              <input type="text" id="name" value="" name="name" class="form-control">
               @error('cname')
              <span class="invalid-feedback text-left" role="alert"><p style="color:red;">name field is required</p></span>
           @enderror
          </div>
      </div>


  <div class="col-md-6">
<div class="form-group ">
<label class="col-md-">categoery description:</label>
<input type="text" id="" value="" name="desc" class="form-control">
@error('cdesc')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">description field is required</p></span>
@enderror
</div>
</div>
  </div>

<div class="row">
<div class="col-md-12 text-center">
<input type="submit" value="Insert categoery" id="btn" class="btn btn-info btn-fill pull-right">
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong></strong>
  <button type="submit" class="close"  data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>\
    <div>
      @if(session()->has('errors'))
          <div class="alert alert-success">
              {{ session()->get('errors') }}
          </div>
      @endif
      @if(session()->has('alert-success'))
          <div class="alert alert-success">
              {{ session()->get('alert-success') }}
          </div>
      @endif
  </div>
  </button>
</form>
</div>
</div>
</div></div>
</div>
</div>

</div>
</div>
</div>
<script  src="assets/js/jquery-3.2.1.min.js"></script>
<script>

@endsection
