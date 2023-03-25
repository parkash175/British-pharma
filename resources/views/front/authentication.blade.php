@extends('layouts.app')
@section('content')
<div class="auth_main_section position-relative overflow-hidden p-0 m-0 text-center">
  <div class="container">
  <div class="row">
  <div class="col-md-12 p-lg-5 mx-auto my-5 py-4" style="background-color: #E5097F; 
  background-image: linear-gradient(#E5097F,#231B1F ); ;" data-aos="zoom-out-down">
    @if(session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
    <h1 class="title">Product Authentication</h1>
    <form action="{{url('verifyproduct')}}" method="post">
      @csrf
  <div class="form-group">
    <label  class="text-light" for="exampleInputEmail1">Enter Product Code</label>
    <input type="text" name="code" class="form-control col-md-4 mx-auto rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" required>

    @if($errors->has('code'))
    <div class="error text-danger">{{ $errors->first('code') }}</div>
@endif
  </div>

  <button type="submit" class="btn btn-lg button_green" style="background-color:#FF8C00;">Submit</button>
</form>
  </div>

  <div class="col-md-12 p-lg-5 mx-auto my-5 auth_text" data-aos="zoom-out-up" daa-aos-delay="300">
    <h1 class="title_2">Number of Authentications Done</h1>

    <div class="numbers">{{$visiter}}</div>

  </div>

</div>
</div>

</div>
@push('headerstyle')
<style>
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
.auth_main_section h1.title{
color:white;
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400!important;
    letter-spacing: 1px;
  }
  .auth_main_section h1.title_2{
    color: #fff;
    font-size: 36px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400!important;
    letter-spacing: 1px;
  }
  .auth_main_section .numbers{
    font-family: 'Poppins', sans-serif;
    color: #EF7F1A;
    
  }
  .auth_main_section form button[type="submit"]:hover{
    border-color:#E5097F;
    /*color:#E5097F;*/
  }
.auth_text{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
}
.auth_text h1, .auth_text .numbers{
  font-size: 50px;
}
.auth_text .numbers{
  font-weight: 700;
}

.numbers span{
    color: #fff;
    background: #212529;
    margin: 20px 5px;
    padding: 15px 25px;
    font-size: 36px;
    border: 1px solid white;
}
</style>
@endpush
@endsection
