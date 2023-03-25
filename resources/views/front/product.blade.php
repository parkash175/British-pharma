@extends('layouts.app')
@section('content')
<style>
h1{
  text-align: center;
}


.modal-content
{
  height:500px;
  width:700px;
  left:30%;
  top:20%;
}

.heading {
  font-size: 16px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}
.checked {
  color: orange;
}
/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}
.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}
/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; border-radius:10px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; border-radius:10px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; border-radius:10px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; border-radius:10px; background-color: #ff9800;}
.bar-1 {width: 15%; border-radius:10px;height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

</style>

<h1 class="py-5" style="font-family: 'Noticia Text', serif; color:#034259;">All Products</h1>
<div class="container-fluid my-5">
  <div class="row">
      @foreach($details as $value)
<div class="col-md-4">
  
<a href="{{url('/ramp/'.$value->id)}}"> <img src="{{asset("images/products")}}//{{$value->pro_img}}" class="img-fluid" alt="{{$value->pro_name}}"  data-aos="flip-right"></a>
  <div>
    <a href="{{url('/ramp/'.$value->id)}}"><h2 style="font-family: 'Noticia Text', serif;">{{$value->pro_name}}</h2></a>
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
  </div>
</div>
@endforeach
</div>
</div>



@endsection
