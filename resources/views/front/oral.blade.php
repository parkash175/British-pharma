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
body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width:auto; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
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
h1
{
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
}
</style>
<h1 class="">Oral Products</h1>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-3">

  <img src="{{asset("images/Testaveron.jpg")}}" class="card-img-top" alt="...">
</div>
  <div class="col-md-3">
  <h6>Name :Testaveronv</h6>
  <p><h3>Description</h3>Massive strength and weight gain. Soothes joint problems. Great pump, highly androgenic & highly anabolic.</p>
  <span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

<!-- <button class="btn" id="myBtn">More detail</button> -->
</div>
<div class="col-md-3">
<img src="{{asset("images/Testaveron.jpg")}}" class="card-img-top" alt="...">
</div>
<div class="col-md-3">
<h6>Name :Testaveronv</h6>
<p><h3>Description</h3>Massive strength and weight gain. Soothes joint problems. Great pump, highly androgenic & highly anabolic.</p>
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
<div class="side">
  <div>5 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-5"></div>
  </div>
</div>
<div class="side right">
  <div>150</div>
</div>
<div class="side">
  <div>4 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-4"></div>
  </div>
</div>
<div class="side right">
  <div>63</div>
</div>
<div class="side">
  <div>3 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-3"></div>
  </div>
</div>
<div class="side right">
  <div>15</div>
</div>
<div class="side">
  <div>2 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-2"></div>
  </div>
</div>
<div class="side right">
  <div>6</div>
</div>
<div class="side">
  <div>1 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-1"></div>
  </div>
</div>
<div class="side right">
  <div>20</div>
</div>
</div><hr>

<!-- <button class="btn" id="myBtn">More detail</button> -->
</div>
<div class="col-md-3 py-5">
<img src="{{asset("images/Testaveron.jpg")}}" class="card-img-top" alt="...">
</div>
<div class="col-md-3 py-5">
<h6>Name :Testaveronv</h6>
<p><h3>Description</h3>Massive strength and weight gain. Soothes joint problems. Great pump, highly androgenic & highly anabolic.</p>
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
<div class="side">
  <div>5 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-5"></div>
  </div>
</div>
<div class="side right">
  <div>150</div>
</div>
<div class="side">
  <div>4 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-4"></div>
  </div>
</div>
<div class="side right">
  <div>63</div>
</div>
<div class="side">
  <div>3 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-3"></div>
  </div>
</div>
<div class="side right">
  <div>15</div>
</div>
<div class="side">
  <div>2 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-2"></div>
  </div>
</div>
<div class="side right">
  <div>6</div>
</div>
<div class="side">
  <div>1 star</div>
</div>
<div class="middle">
  <div class="bar-container">
    <div class="bar-1"></div>
  </div>
</div>
<div class="side right">
  <div>20</div>
</div>
</div>

<!-- <button class="btn" id="myBtn">More detail</button> -->
</div>


</div>
</div>
    <!-- The Modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <span class="close">&times; </span>
    <h3 style="text-align:center; color:red; padding-top:10px;">BritishPharma</h3>
    <div class="container">
      <div class="row">
        <div class="col-md-5 my-5s">
    <img src="{{asset("images/Testaveron.jpg")}}" class="card-img-top" alt="..." style="height:300px; width:300px;">
   </div>
   <div class="col-md-5" style="margin-left:20px;margin-top:20px;">
   <h5>Testaveronv</h5>
</div>


</div>
</div>
</div>
</div>
</div>
</div>


@endsection
