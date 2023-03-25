@extends('layouts.adminmaster')
@section('content')

<div class="content">
			<div class="container-fluid">
					<div class="row">
							<div class="col-md-12">
									<div class="card">
											<div class="header">
													<h4 class="title">Insert products</h4>

											</div>

<div class="content">


  @foreach($product as $value)

<div class="row form-group ">
<label class="col-md-4 border border-info">Product Name:</label>
<p>{{ $value->pro_name }}</p>
</div>

<div class="row form-group ">
<label class="col-md-4 ">Product Price:</label>
<p>{{ $value->pro_price }}</p>
</div>

<div class="row form-group ">
<label class="col-md-4">Image:</label>
<p><img src="{{url('images/Products')}}/{{$value->pro_img }}" style="height:200px; width:200px; border-radius: 8px;"></p>
</div>

<div class="row form-group ">
<label class="col-md-4">Description:</label>
<p>{{ $value->pro_desc }}</p>
</div>
<td>
  <a href="{{ URL('admin/editproduct/'.$value->id )}}" class="btn btn-warning btn-sm">Edit</a>
  <td>
    <a href="{{ URL('admin/Delete/'.$value->id )}}" class="btn btn-danger  btn-sm" style="margin-left:500px;">Delete</a>
  </td>
</td>

@endforeach
</div></div></div></div></div></div>
@endsection
