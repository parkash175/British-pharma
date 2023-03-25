@extends('layouts.app')
@section('content')
<div class="auth_main_section position-relative overflow-hidden p-0 m-0 -cente>
  <div class="container">
   @foreach($single as $value)
  <div class="row p-5 bg_dark_blue"  style="   background-color: #E5097F; 
  background-image: linear-gradient(#E5097F,#231B1F );" data-aos="zoom-out-down">
  <div class="col-md-4 pl-0" data-aos="zoom-in-down">
  <img src="{{asset("images/products")}}//{{$value->pro_img}}" class="card-img-top" alt="..." style="border-radius:5%; box-shadow: 10px 10px 10px black;">
  </div>
  <div class="col-md-7 text-white" data-aos="fade-up-left">
    <h3 class="title"><b></b>{{$value->pro_name}}</h3>
    <h4 class="text-left">Description:</h4>
    <p style="color:white;font-family:'Arial', san-serif;">{{$value->pro_desc}}</p>
    <span class="heading">User Rating</span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  <p class="rating">4.6 average based on consumer reviews.</p>
    <button class="btn button_green" style="" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Click for Information
  </button>
  <div id="hover">Click here </div>

<div class="collapse " id="collapseExample">
  <div class="card card-body bg_dark_blue" >
    <h3>Additional Information</h3>
     <h6><b>Composition: </b>{{$value->composition}}</h6>
     <h6><b>Packing: </b>{{$value->packing}}</h6>
     <h6><b>Formula: </b>{{$value->formula}}</h6>
     <h6><b>Molecular Mass: </b>{{$value->molecular_mass}}</h6>
     <h6><b>Anabolic/Androgenic Ratio: </b>{{$value->anabolic}}</h6>
     <h6><b>Dosage: </b>{{$value->dosage}}</h6>
  <hr style="border:3px solid #f1f1f1">
  </div>
</div>
  </div>
  </div>
</div>
@endforeach
</div>
</div>
</div>
@push('headerstyle')
<style>
#hover
{
  display:none ;
}
.btn{
  background-color:#FF8C00;
  border-radius:50px;
}
h6
{
  text-align:left;
  margin-left:30px;
}

.title{
    font-size:30px;
    color:white;
    font-family: 'Noticia Text', serif;
;}
/*h3{*/
  /*color:white;*/
/*}*/
.checked {
  color: orange;
}

.auth_main_section{
  display:flex;
  align-items:center;
  min-height:75vh;
  background-image: url('{{ url('images/7.jpg') }}');
}
.auth_main_section .row{
  position: relative;
  z-index: 2;
}
.auth_main_section::before{
  content:'';
  position: absolute;
  left: 0;
  right:0;
  top:0;
  bottom:0;
  height: 100%;
  width:100%;
  z-index:1;
  background-color:rgba(19, 93, 118,0.9);
}
.btn:hover
{
  background-color:#f1c00f;
  
}

h1.title {
    color:white;
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400!important;
    letter-spacing: 1px;
}
.rating{
    color:white;
}
</style>
@endpush
@endsection
