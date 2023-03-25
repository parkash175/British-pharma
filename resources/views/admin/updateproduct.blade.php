@extends('layouts.adminmaster')
@section('content')

 	<div class="content">
			<div class="container-fluid">
					<div class="row">
							<div class="col-md-8">
                <div id="response"></div>
									<div class="card">
                    <div class="header">
                              <h4 class="title">Add Product</h4>
                          </div>

	            <div class="content">

                      <form id="ajaxUpdateProduct" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="pro_id" value="{{ $product->id }}">
                       <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                           <label for="name" class="required">Name</label>
                           <input type="text" class="form-control" value="{{$product->pro_name}}" id="name" name="name"  placeholder="First name">
                        </div>
                      </div>
                    </div>

                         <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                           <label for="desc">Description</label>
                           <textarea class="form-control" value="{{$product->pro_desc}}" id="desc" name="desc" placeholder="Description"></textarea>
                         </div>
                       </div>
                     </div>


                          <input class="btn btn-success btn-fill pull-right" id="btn" type="submit" value="Update Info">
                       <div class="clearfix"></div>

                 </form>

               </div>


</div>
</div>
<!-- Form Card End -->
<div class="col-md-4">
  <div class="card">
    <div class="header">
      <h4 class="title">Add image</h4>
          </div>
          <div class="content">
          <form class="form" action="{{ url("admin/imageupdate") }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="row">
              <div class="col-md-12">
                 <div class="form-group text-center">
                <label for="imageUpload" class="cursor-pointer position-relative">
  								<div class="img-overlay cursor-pointer position-absolute d-flex align-items-center justify-content-center text-white rounded">
  									Change
  								</div>
  								<img class="current-thumbnail rounded" style="height:100%;width:100%;max-width:300px;object-fit:cover;"
                  src="{{ url('images/products/'.$product->pro_img) }}">
  							</label>
  							<input type="file" name="video_thumbnail" class="fa fa-pencil d-none" style="display:none" id="imageUpload" accept=".png, .jpg, .jpeg">
              </div>
            </div>
          </div>
          <input class="btn btn-success btn-fill btn-block" id="btn" type="submit" value="Update Image">
       <div class="clearfix"></div>

          </form>
          <div>
  <p>  @if(Session::has('error'))
      {{ session('error') }}
    @endif
    @if(Session::has('success'))
      {{ session('success') }}
    @endif</p>
</div>
        </div>
      </div>
</div>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
@if(session()->has('success'))
<script>
  (function($){
    $(document).ready(function(){
      $.notify({
        icon: 'pe-7s-check',
        message: '{{ session()->get('success')}}'
      },{
          type: 'success',
          timer: 5000
      });
    });
  })(jQuery);
</script>
@endif

@if(session()->has('error'))
<script>
  (function($){
    $(document).ready(function(){

      $.notify({
        icon: 'pe-7s-check',
        message: '{{ session()->get('error')}}'
      },{
          type: 'danger',
          timer: 10000
      });
    });
  })(jQuery);
</script>
@endif

@if ($errors->any())
<script>
  (function($){
    $(document).ready(function(){

      $.notify({
        icon: 'pe-7s-check',
        message: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li> @endforeach</ul>'
      },{
          type: 'danger',
          timer: 10000
      });
    });
  })(jQuery);
</script>
@endif

<script>
  $('#ajaxUpdateProduct').on("submit", function(event){
     event.preventDefault();//form submit hon te onu rok dega ehe function preventDefault
       var formData = new FormData($(this)[0]);
       //this matlab '#ajaxAddProduct' same aa
      $.ajax({
        url:'{{ url('admin/updateproduct/'.$product->id) }}',
        method:"POST",
        data: formData,
        dataType:'JSON',
        contentType: false,//jdo apa ajax nall file vi upload krvoni hove odo ehe dono (contentType,processData) false karne hunde aa
        processData: false,
        cache:false,
        success:function(data)
        {
            if(data.status == 200){//if product created successfully
              $.notify({
              	icon: 'pe-7s-check',
              	message: data.success
              },{
                  type: 'success',
                  timer: 5000
              });
            }


        },
        error :function( data ) {
        if( data.status === 422 ) {
          $('#response').html('');
            var errors = $.parseJSON(data.responseText);
            $.each(errors, function (key, value) {//ehe foreach loop aa jquery da
                // console.log(key+ " " +value);
            $('#response').addClass("alert alert-danger");

                if($.isPlainObject(value)) {//ethe check kar rea json boject aa rea je errors da ta onu each loop naal show krwaya
                    $.each(value, function (key, value) {
                      //desc: ["Description field is required."]
                      $('#response').show().append(value+"<br/>");
                    });
                }
                // else{
                    // $('#response').show().append(value+"<br/>"); //this is my div with messages
                // }

            });
          }
        }

      });
  });
</script>
<script>
		$(document).ready(function() {
			var readURL = function(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function(e) {
						$('.current-thumbnail').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#imageUpload").on('change', function() {
				readURL(this);
			});
		});
	</script>
  <style>
  .position-relative{
    position: relative;
  }
		label[for="imageUpload"] .img-overlay {
      position: absolute;
      opacity: 0;
      background: rgba(0, 0, 0, 0.2);
      height: 100%;
      top: 0;
      display: flex;
      width: 100%;
      color: #fff;
      z-index: 1;
      backdrop-filter: blur(5px);
      cursor: pointer;
      transition: all .4s ease-in;
      align-items: center;
      justify-content: center;
		}

		label[for="imageUpload"] .img-overlay:active {
			opacity: 0;
		}

		label[for="imageUpload"]:hover .img-overlay {
			opacity: 1;
		}
	</style>
@endsection
