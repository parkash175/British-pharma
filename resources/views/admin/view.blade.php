@extends('layouts.adminmaster')
@section('content')
<?php $number = 1; ?>

<body class="">
<div class="content ">
		<div class="container-fluid ">
				<div class="row ">
						<div class="col-md-12 ">
								<div class="card ">
										<div class="header">
												<h2 class="title mb-2">All Products</h2>
				    						</div>
										<div class="content">
		<div class="row  ">
			<div class="col-md-12 ">
			  <!-- Contextual classes -->
			  <table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Image</th>
							<th>Name</th>
							<th>Description</th>
              <th>Action</th>

						</tr>
					</thead>
			    <tbody>
						@foreach($product as $value)
			      <tr>
			        <th>{{ $number }}</th>
							  <?php $number++; ?>
								<td><img src="{{ $value->pro_img != '' ? url('images/products/'.$value->pro_img) : url('images/products/product.jpg') }}" width="100%" style="max-width: 80px; "/></td>
			        <td>{{$value->pro_name}}</td>
			        <td>{{$value->pro_desc}}</td>
							<td>
							<a href="{{ url('admin/edit/'. $value->id )}}" class="btn btn-info">Edit</a>
							<a href="{{ url('admin/delete/' . $value->id ) }}" class="btn btn-danger"><i class="pe-7s-trash"></i></a>
						</td>
			      </tr>
						@endforeach
			    </tbody>
			  </table>
			</div>

	</div>
</div>
</div>
</div></div></div></div>

@endsection
</body>
