@extends('layouts.adminmaster')
@section('content')
<div class="content col-md-12">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h2 class="title" style="margin-left:50px;">Generate coupen code</h2>
                    </div>
  <div class="content" style="margin-top:50px;">
  <div class="row">
<input type="hidden" value="{{csrf_token()}}" id="token">
        <div class="col-md-5">
            <div class="form-group">
            <label>number</label>
      <input type="number" id="num" value="" class="form-control">
      </div>
        </div>
  </div>

<div class="row">
  <label for="cars">Select Batch number:</label>

  <select id="batch" class="form-control">
    <option value="">Chose Batch no.</option>
<?php $product = \App\product::all(); ?>
    @foreach($product as $value)
    <option value="{{$value->batch_number}}">{{$value->batch_number}}</option>
    @endforeach
</select>

</div>
      <div class="row">
      <div class="col-md-12 text-center">
      <input type="submit" value="submit" id="btn" class="btn btn-info btn-fill pull-left">
      </div>
      </div>
      <p><span style = "color:#8866ff;" id="mg"></span></p>
</div>
</div>
</div>
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h2 class="title" style="margin-left:50px;">Generate PDF File Current codes</h2>
            </div>
            <div class="content">
              <div class="form-group">
                <label>Select Date</label>
              <select id="date" class="form-control">
                <option value="">Select</option>
                @forelse($dates as $date)
                <option  value="{{$date->date}}">{{ $date->date.',  Codes: '.$date->codes }}</option>
                @empty
                <option>Select</option>
                @endforelse
              </select>
             <a id="generate_btn" href="" target="_blank" style="display:inline-block;margin-top:15px;" class="btn btn-primary">DOWNLOAD</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    var link = 'http://localhost/hochest/public/admin/getPDF/';//ethe apa url link waale variable ch pa leya
    var generateBtn = $('#generate_btn');//ehe apa id naal a tag generateBTn waae variable ch paa leya

    var date = $('#date');// ehe apa select dropdown date de variable ch add kitti ena smj aya
    date.change(function(){//ethe apa jive click function hunda button ya link layi ehe change function ues
    var getDate =  $(this).val();
          generateBtn.attr('href', link+getDate);
    });
});
</script>
<script>
$(document).ready(function(){
  $("#btn").click(function(){
    $("#mg").show();
    var num=$("#num").val();
    var batch=$("#batch").val();
	var token=$("#token").val();
  $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
	$.ajax({
		type:'post',
		url:"{{ url('admin/check')}}",
		data:"num=" +num+ "&batch_number="+batch+ "&_token=" +token,


	success:function(data){
  //if product created successfully
              $.notify({
              	icon: 'pe-7s-check',
              	message: 'Codes Created Successfully.'
              },{
                  type: 'success',
                  timer: 5000
              });
              num.val('');
      // }
    // $("#mg").html("Codes insert sucessfully")
  	// 	$("#mg").fadeOut(3500);

	}
	});
});
});
</script>
@endsection
