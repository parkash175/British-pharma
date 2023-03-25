@extends('layouts.app')

@push('header-codes')
<style>
.brochour
{
      
}
.click
{
    margin-left:110px; 
    background-color: #04739B; 
  /*background-image: linear-gradient(#E5097F,#231B1F );; */
    border-radius:20px;
    color:white;
    c
   
}
.click:hover
{
    background-color:#FFD700 ;
}
.click2
{
     margin-left: 550px;
  margin-right: auto;
     background-color:#04739B;
  /*background-image: linear-gradient(#E5097F,#231B1F );; */
    border-radius:20px;
    color:white;
        width:300px;

}
.click2:hover
{
    background-color:#FF095F ;
}
.last
{
    font-family:'Font Awesome';
    font-size:15px;
}
h1{ text-align:center;
    
}
  h2.title{
    font-family: 'Poppins', san-serif;
    font-weight: 700;
    font-size: 36px;
  }
  ul.instruction-points {
    list-style: armenian;
    padding-left: 30px;
}
ul.instruction-points li {
    font-size: 15px;
    margin-bottom: 30px;
    list-style: disc;
}
 .section_2{
   height:500px;
   min-height:100vh;
   padding:10px;
   background-image: url('{{asset('images/Rectangle.jpg')}}');
   display:flex;
   align-items: center;
   justify-content: center

 }
 .card {
           box-shadow: 5px 3px 3px rgb(176, 156, 211);
       }
       .kalam {
            font-family: 'Kalam', cursive;
        }
 .section_2 .col-md-6.col_1 {
    height: auto;
    display: flex;
    flex-flow: column;
    justify-content: center;
    /* align-items: center; */
 }
 .section_2 .row{
   background:;
   align-items:center;
 }

}
.section_2 .row p{
  color: #fff;
    font-size: 16px;
    padding-left: 0;
}
.section_2 .row h2{
      color: yellow;
}
.section_2 .row img{
  height: 100%;
    min-height: 50vh;
    object-fit: cover;
}
h2
{
  font-family: Poppins;
  font-weight: bold;
  font-size: 50px;
}
p
{
  font-family: 'Awesome';
  font-size:15px;
}
h1
{
  font-family: Poppins;
  font-weight: bold;
}



/* Welcome SEction */
#welcome {
    float: left;
    width: 100%;
    /* color: #fff; */
    /* background: url(../images/bg20.png) repeat; */
    background-image: url('');
    border-bottom: 30px;
    border-color: -moz-linear-gradient(bottom, #555555, #111111);
}
#welcome h1
{
    /*color:#FFD700;*/

font-family: 'PT Serif', serif;
    
}
#welcome .pagewarp {
    padding: 90px 0 90px 0;
}

.pagewarp {
    width: 1024px;
    margin: 0 auto;
    position: relative;
}
img.more-btn {
    position: absolute;
    bottom: 0px;
    right: 0px;
    cursor: pointer;
}
.wel-sup h1 {
    font-size: 40px;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bold;
    position: relative;
    line-height: 1;
    margin-bottom: 5px;
}
#welcome h2 {
    font-family: Helvetica, tahoma;
    letter-spacing: 6px;
    margin: 0 0 40px 0;
    font-size: 24px;
    font-weight: lighter;
    line-height: 1;
}
#welcome p {
    margin-bottom: 20px;
}
.prop-sub {
    left: 4px;
    top: -44px;
    display:none ;
    position: absolute;
}
.wel-sup p {
    color: #000;
}
.section-3{
  background: #ccc;
}

.section_2 .row{
  max-width:100%;
}

/* section 3 banner */
#s3_banner {
            background: url('{{ url('images/bg-sec2.jpg')}}') top center no-repeat #e1e1e1;
            float: left;
            width: 100%;
            height: 742px;
        }

        #s3_banner .custom_row {
            width: 1024px;
            margin: 0 auto;
            position: relative;
        }

        #s3_banner .custom_col {
            width: 650px;
        }

        #s3_banner h1 {
            color: #fff;
            margin: 50px 0 0 0;
            font-size: 47px;
        }

        #s3_banner h2 {
            color: #8fafc2;
            margin-bottom: 19px;
            font-size: 42px;
            font-weight: bold;
        }

        #s3_banner p {
            color: #666;
            font-size: 13px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-weight: lighter;
            font-size: 14px;
            line-height: 1.5;
        }

        #s3_banner button {
            float: left;
            background: #8fafc2;
            color: #fff;
            border: none;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 15px;
            margin-top: 20px;
        }


        /* SERVICES SECTION */
        .service_boxes .card
        {
            padding: 40px 30px;
                  border:0px;

        }
        .service_boxes  .card:hover
        {

        box-shadow: 3px 10px 10px grey;
        }


        .service_boxes img.service-img {
            height: auto;
            width: 100px;
            margin: 0px auto;
        }
        .service_boxes .service_title {
          margin-top: 30px;
          font-family: 'Poppins', sans-serif;
          color:black;
          text-align: center;
        }
        .service_boxes .service_text {
          margin-top: 20px;
          font-family: 'Arail', sans-serif;
          font-size:20px;
          color: black;
          
          text-align: center;
        }
        .inst
        {
            height:50px;
            background-color: #04739B; 
  background-image: linear-gradient(#04739B,#231B1F );
        }

        /*====================== RESPONSIVE SCREENS MEDIA QUIERIES =========================*/

        @media screen and (max-width: 1200px) {
            #s3_banner .custom_row {
                width: 96%;
                padding: 0 2%;
                float: left;
            }
        }
        
 @media screen and (max-width: 600px) {
            .inst {
                height:80px;
            }
        }
        @media screen and (max-width: 600px) {
            .click {
               margin-left:80px;
            }
        }
               @media screen and (max-width: 600px) {
            .click2 {
               margin-left:100px;
               width:200px;
            }
        }
        @media screen and (max-width: 960px) {
            #s3_banner {
                height: auto;
                padding: 20px 0;
                background: url('{{ url('images/bg-sec2-res.jpg')}}');
            }
            #s3_banner .custom_col {
                width: 100%;
            }
            #s3_banner h1 {
                margin-top: 20px;
            }
        }
.instruction{
  background-color:;
}
</style>

@endpush

@section('content')

@include('front.headerbanner')

    <!-- ***************** header .parts end ************** -->

    <!--**************** 3 extra header div start ******************-->


    <div id="welcome" class="" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
        <div class="container-fluid py-5">

            <div class="wel-sup">
              <img alt="British Pharma steriods prop sub" class="prop-sub" src="{{asset('images/prop-sub.png')}}" />
                <h1>WELCOME TO BRITISH PHARMA GROUP</h1>
                  <p class="pl-0" style="font-size:20px;">
                    We are the leading business in the Hormonal anabolic products sector with a wide stock of anabolic steroids designed to cover and fulfill the needs of the most exigent user. We got a wide variety of products specially manufactured to meet the different needs of the Athletes.
                    <br><br>
                    Each of our products is made
with the highest standards of quality and ethics, having the certainty that you are using a
product with a genuine active principles of the best quality in the world. We are a business with outstanding standards regarding the design and package of products as well as the highest quality in active principles to create one of the most amazing lines of anabolics steroids available in the market.
  <!--                  <br><br>-->
  <!--                  Our Lab specialize in formulation, analysis and development of new products under the investigation of expert athletes and body builders that applies innovation into the development of new products, with the purpose of being completely useful to-->
  <!--the performance of the modern athlete taking him to accomplish his goals with the help of our new pharmaceutical form.-->
                </p>
            </div>
        </div>
        

    </div>
 <!-- <-----second section ------>
 <div class="brochour">
 <a href="images/British Pharma Brochure.pdf" class=" click2 btn " >Download Catalog</a>
</div>


<div class="row" style="margin-top: 100px;">
    <div class="col-md-8 offset-md-4">
      <iframe width="460" height="300" src="https://www.youtube.com/embed/BEelt1nFHWE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>


 
 
 
 
 
 
 
 
 
 
 
 
 




    
 
 <div class="containe-fluid   py-5" style="">

<div class="row  p-lg-5 p-md-3 align-items-center" >
<div class="col-md-6 instruction">
<img src="{{asset('images/new_images/Authenticity mokeup new copy.jpg')}}" class="img-fluid" data-aos="-right" style="height:auto; width:100%;  border-radius:25px;   box-shadow: 10px 10px 10px grey ">
</div>
<div class="col-md-6 py-4" data-aos="flip-right">
  <div class=" inst ">
  <h1 class="title text-light mb-5" >Authentication Guidelines</h1>
  </div>
  
  <ul class="instruction-points py-2">
    <li> Make sure that you buy British Pharma 
product’s from verified sources only.</li>
    <li>Our all products have authentication code.</li>
    <li>The code must be in 8 digits in length.</li>
    <li>Alphabetical code must be in Uppercase 
letters. (eg. A-Z)</li>
    <li>The code must be written in both alphabetic and 
numeric. (eg. A528HGSR)</li>
    <li>Our Official website is Only www.british-pharma.com</li>

  </ul>
        <a href="{{ url('/authentication')}}" class=" click btn " >click here for authentication</a>

</div>

</div>
</div>

 </div>
 </div>

 <!--<------end section ----->

 <!--<img class="img-fluid p-0 content_banner" style="height:500px; width:1200px; align-item:center;" src="{{ url('images/new_images/4.jpg')}}"/> -->


   <div id="services" class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
       <h3 class="section_title" data-aos="zoom-in" >Services</h3>
       <p class="text-center" data-aos="zoom-in" data-aos-delay="300">Quickly build an effective services for you .Our first Priority is client satisfication.</p>
   </div>

   <div class="container mb-5">
       <div class="row">
           <div class="card-deck  my-5 text-center service_boxes ">
               <div class="card text-center box red solo" data-aos="zoom-in" data-aos-delay="500" >
                  <img class="service-img" src="{{asset('images/quality.png')}}">
                  <h5 class="service_title">Our services</h5>
                  <p class="service_text">We provide our clients reasonably priced & high-quality products quickly and anywhere in India and around the world.</p>
               </div>

               <div class="card text-center" data-aos="zoom-in" data-aos-delay="700">
                  <img class="service-img" src="{{asset('images/vehicle.png')}}">
                  <h5 class="service_title">Our Quality</h5>
                  <p class="service_text">We manufacture and market Pharmaceutical products,
                    which will satisfy continuing needs of our customers</p>
               </div>

               <div class="card text-center" data-aos="zoom-in" data-aos-delay="900">
                  <img class="service-img" src="{{asset('images/microscope.png')}}">
                  <h5 class="service_title">Clinical Trial Supply</h5>
                  <p class="service_text">British pharma can provide a variety of dosage forms and is
                    experienced in dealing with difficulty coming in the manufacturing of products.</p>
               </div>
           </div>
         </div>
     </div>

<section class="extraheader-div py-5 bg-light">
  <div class="container mb-5">
    <div class="row">
      <div class=" extra-div1 col-lg-4 col-md-4 col-12"  data-aos="zoom-out">
        <a href="#"><img src="{{ asset('images/whologopng.png')}}" style="height:100px; width:100px;" alt=""></a>
        <h1>WHO</h1>
        <p class="last">The World Health Organization (WHO) is a specialized agency of the United Nations responsible for international public health. The WHO Constitution, which establishes the agency's governing structure and principles, states its main objective as "the attainment by all peoples of the highest possible level of health. It is headquartered in Geneva, Switzerland, with six semi-autonomous regional offices and 150 field offices worldwide.</p>

      </div>
      <div class=" extra-div2 col-lg-4 col-md-4 col-12"  data-aos="zoom-out" data-aos-delay="300">
        <a href="#"><img src=" {{ asset('images/gmp.png')}}" style="height:100px; width:100px;" alt=""></i></a>
        <h1>GMP</h1>
        <p class="last">Good manufacturing practices (GMP) are the practices required in order to conform to the guidelines recommended by agencies that control the authorization and licensing of the manufacture and sale of food and beverages, cosmetics, pharmaceutical products, dietary supplements and medical devices. These guidelines provide minimum requirements that a manufacturer must meet to assure that their products are consistently high in quality, from batch to batch, for their intended use.

        </p>
      </div>
      <div class=" extra-div3 col-lg-4 col-md-4 col-12" data-aos="zoom-out" data-aos-delay="500">
        <a href="#"><img src="{{ asset('images/iso.png')}}" style="height:100px; width:100px;" alt=""></a>
        <h1>ISO</h1>
        <p class="last">The International Organization for Standardization (ISO) is an international standard-setting body composed of representatives from various national standards organizations.
          Founded on 23 February 1947, the organization promotes worldwide proprietary, industrial, and commercial standards. It is headquartered in Geneva, Switzerland, and works in 164 countries.
          </p>
      </div>
    </div>
  </div>
</section>
@endsection
