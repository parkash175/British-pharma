@extends('layouts.app')
@section('content')
<div class="auth_main_section position-relative overflow-hidden p-0 m-0 text-center">
  <div class="container" >

    <div class="row p-5 bg_dark_blue align-items-center" data-aos="zoom-out-down"style=" background-color: #E5097F; 
  background-image: linear-gradient(#E5097F,#231B1F );;">

    <div class="col-md-5 pl-0" data-aos="zoom-in-down">

    <img src="{{asset("images/products")}}//{{$productData->pro_img}}" class="card-img-top" alt="..." style="border-radius:5%; box-shadow: 10px 10px 10px black;">
    </div>
    
 
<!--     <div class="col-md-3 trusted">-->
<!--<img src="{{asset('images/new_images/German Quality Logo.png')}}" class="img-fluid" data-aos="-right" style="height:auto; width:100%;     box-shadow: 10px 10px 10px black; float: right;-->
<!--  width: 300px;-->
<!--  border: 3px solid #73AD21;-->
<!--  padding: 10px;">-->
<!--</div>-->
    
    
    
    <div class="col-md-7 text-white" data-aos="fade-up-left">
      <h2 class="bounceIn mb-5" style="color: #00FF00;font-family:'Poppins';">
          <br>Your Product is 100% Genuine</h2>
      
      
     <h1 class="title"><b></b>{{$productData->pro_name}}</h1>
      <h5><b>Batch No.: </b>{{$productData->batch_number}}</h6>
      <h5><b>Mfg. Date: </b>{{ date("m-Y", strtotime($productData->Mfg)) }}</h5>
      <h5><b>Exp. Date: </b>{{ date("m-Y", strtotime($productData->Exp)) }}</h5>


    </div>
    </div>
    </div>


   </div>
</div>
</div>
@push('headerstyle')
<style>


h5
{
  /* color:white; */
}
h3{
  color:white;
}
.checked {
  color: orange;
}

.auth_main_section{
  display:flex;
  align-items:center;
  min-height:75vh;

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
  z-index:;
  background-color:;
}
@keyframes bounceIn {
  0%{
    transform: scale(0.1);
    opacity: 0;
  }

  60%{
    transform: scale(1.2);
    opacity: 1;
  }

  100%{
    transform: scale(1.0);
  }
}


.bounceIn{
  animation: bounceIn 2s;
}

h1.title {
    
    font-size: 30px;
    color:white;
    font-family: 'Noticia Text', serif;
    font-weight: 400!important;
    letter-spacing: 1px;
}

</style>
@endpush
@endsection
