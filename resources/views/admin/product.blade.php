@extends('layouts.adminmaster')
@section('content')

 	<div class="content">
			<div class="container-fluid">
					<div class="row">
							<div class="col-md-9">
                <div id="response"></div>
									<div class="card">
                    <div class="header">
                              <h4 class="title">Add Product</h4>
                          </div>
	<div class="content">
                      <form id="ajaxAddProduct" enctype="multipart/form-data">
                          @csrf
                       <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                           <label for="name" class="required">Name</label>
                           <input type="text" class="form-control" id="name" name="name"  placeholder="First name">
                           @error('name')
                 <span class="invalid-feedback text-left" role="alert"><p style="color:red;">name field is required</p></span>
               @enderror
</div></div>
             </div>
                         <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                           <label for="desc">Description</label>
                           <input type="text" class="form-control" id="desc" name="desc" placeholder="Description">
                           @error('desc')
             <span class="invalid-feedback text-left" role="alert"><p style="color:red;">Description field is required</p></span>
          @enderror
                         </div></div></div>

                       <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                         <label for="p_image">select Image</label>
                         <input type="file" class="form-control" id="p_image" name="p_image" placeholder="">
                         @error('p_image')
                              <span class="invalid-feedback text-left image_error text-danger" role="alert">image field is required</span>
                              @enderror
                       </div>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                     <label for="p_image">select Categoery</label>
                     <select id="cats" name="cats" class="form-control">
                       <option value="">Chose categoery.</option>
                       <?php $cats = \App\Categoery::all(); ?>
                       @foreach($cats as $value)
                       <option value="{{$value->id}}">{{$value->name}}</option>
                       @endforeach
                   </select>
                   @error('cats')
         <span class="invalid-feedback text-left" role="alert"><p style="color:red;">Categoery  field is required</p></span>
       @enderror
                  </div>
                 </div>
               </div>

                   <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                       <label for="name" class="required">Batch number</label>

                       <input type="text" class="form-control" id="batch_number" name="batch_number"  placeholder="Enter batch name">
                       @error('batch_number')
             <span class="invalid-feedback text-left" role="alert"><p style="color:red;">Batch  field is required</p></span>
           @enderror
</div></div>
         </div>
         <div class="row">
           <div class="col-md-12">
              <div class="form-group">
             <label for="name" class="required">HSN_code</label>
             <input type="text" class="form-control" id="hsn_code" name="hsn_code"  placeholder="Enter HSN Code">
             @error('hsn_code')
   <span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
 @enderror
</div></div>
</div>

<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">composition</label>
    <input type="text" class="form-control" id="composition" name="composition"  placeholder="">
    @error('composition')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>


<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">packing</label>
    <input type="text" class="form-control" id="packing" name="packing"  placeholder="Enter HSN Code">
    @error('packing')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>


<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">formula</label>
    <input type="text" class="form-control" id="formula" name="formula"  placeholder="Enter HSN Code">
    @error('formula')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>


<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">molecular_mass</label>
    <input type="text" class="form-control" id="molecular_mass" name="molecular_mass"  placeholder="Enter HSN Code">
    @error('molecular_mass')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>


<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">active_life</label>
    <input type="text" class="form-control" id="active_life" name="active_life"  placeholder="Enter HSN Code">
    @error('active_life')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>

<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">anabolic_androgonic ratio:</label>
    <input type="text" class="form-control" id="anabolic" name="anabolic"  placeholder="Enter HSN Code">
    @error('anabolic')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>

<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">dosage</label>
    <input type="text" class="form-control" id="dosage" name="dosage"  placeholder="Enter HSN Code">
    @error('dosage')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">HSN field is required</p></span>
@enderror
</div></div>
</div>

<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">Exp. Date</label>
    <input type="date" class="form-control" id="Exp" name="Exp" >
    @error('Exp')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">Date field is required</p></span>
@enderror
</div></div>
</div>

<div class="row">
  <div class="col-md-12">
     <div class="form-group">
    <label for="name" class="required">Mfg. Date</label>
    <input type="date" class="form-control" id="Mfg" name="Mfg">
    @error('Mfg')
<span class="invalid-feedback text-left" role="alert"><p style="color:red;">Date field is required</p></span>
@enderror
</div></div>
</div>

        <input class="btn btn-info btn-fill pull-right" id="btn" type="submit" value="Submit">
        <div class="clearfix"></div>
   </form>
               </div>


</div>
</div>
</div>

</div>
</div>
@endsection

@push('footer-codes')

<script>
(function($){
  $('#ajaxAddProduct').on("submit", function(event){
     event.preventDefault();//form submit hon te onu rok dega ehe function preventDefault

       var formData = new FormData($(this)[0]);
       //this matlab '#ajaxAddProduct' same aa


      $.ajax({
        url:'{{ url('admin/ajaxAddProduct') }}',
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

                //alert();
               var alertmsg = '<div class="alert alert-success">'+data.success+'</div>';
              //
                $('#name, #desc, #p_image, #batch_number, #hsn_code, #Exp, #cats, #Mfg, #composition, #packing, #formula, #molecular_mass ,#active_life, #anabolic, #dosage').val('');//value ''(null) kra ti sa manjeet yr validations dekhi chk reha ki nhi???
              //
              //  $('#ajaxAddProduct').before(alertmsg);//before function jwuery da default funtion aa ehe form to pela alertmsg nu add krega
              //  $('.alert.alert-success').delay(10000).fadeOut(800);

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
})(jQuery);
</script>
@endpush
