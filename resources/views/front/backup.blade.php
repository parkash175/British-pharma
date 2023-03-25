@push('header-codes')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css')}}">

@endpush
<style>
img
{
  height:700px;
  width:100%;
  background-repeat: no-repeat;
background-size: cover;
position: relative;
}
#particle-canvas {
  position: absolute!important;
  z-index:1;
  width: 100%;
  height: 100%;
}

.rr {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 3s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}
#str {
   font-family: 'Poppins', sans-serif;
   font-size: 20px;
   margin: 20px 0px 0px 0px;
   color: #00737a;
   font-weight: bold;
   text-align: center;
   background: #ffca22;
   display: inline-block;
   padding: 10px 20px;
}
@-webkit-keyframes typing { from { width: 0; } }
@-webkit-keyframes blink-caret { 50% { border-color: transparent; } }


.banner_home{
  background-size: cover;
  background-image: url('{{asset('images/8.jpg')}}');
  height:95vh;
  width:100%;
  padding-top:20px;
  position: absolute;
}


.banner_home::before{
  content:'';
  position:absolute;
  z-index:8;
  height:100%;
  width:100%;
  left:0;
  top:0;
  bottom:0;
  right:0;
  background:rgba(0,0,0,0.5);
}
 .banner_home p{
   color: #fff;
   font-family: 'Poppins', sans-serif;
    font-size: 32px;
    max-width: 400px;
    margin-right: 0;
    margin-left: auto;
 }
 .hero-text h1{
   font-size: 55px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
 }
.hero-text{
  position: absolute;
    z-index: 9;
    left: -150%;
    top:37%;
    transform: translate(17%, -40%);
    color:white;
    font-family: Futura BT;

    font-size: 32px;
    margin: 0px 0px 0px 0px;
    text-align: right;
    animation: slideFromLeft 2s linear 1s forwards;
}
.hero-text1{
  position: absolute;
    z-index: 9;
    left: -150%;
    top:37%;
    transform: translate(22%, -40%);
    color:white;
    font-family: Futura BT;
    font-size: 32px;
    margin: 0px 0px 0px 0px;
    text-align: right;
    animation: slideFromLeft 2s linear 1s forwards;
}
.hero-text1 li
{
background-color: #1B4F72 ;
}
.hero-text li
{
background-color:  #1B4F72 ;
}

@keyframes slideFromLeft {
  0% {
    left: -100%;
  }
  100% {
    left: 50%;
  }
}

@media only screen and (max-width:767px) and (min-width:200px){
  .hero-text {
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  .banner_home p {
      text-align: center;
  }

}

</style>
<img class="img-fluid p-0 only_show_tab_moblie" src="{{ url('images/8.jpg') }}"/>
<section class="banner_home p-0 m-0 d-flex align-items-center justify-content-start position-relative hide_tab_moblie">
<div id="particle-canvas"></div>
 <div class="hero-text1">

</div>
<div class="hero-text">
  <p >You CAN'T ENJOY<h1 class="mp">WEALTH</h1><br>IF YOU'RE NOT IN GOOD<br>
  HEALTH </p>

   <a  class="button_blue btn btn-lg rounded-0" href="{{ url('/authentication')}}">Click here to authenticate Your Product!!!!</a>
<a href="{{ url('images/Brochure.pdf')}}" download class="button_green btn btn-lg rounded-0">Brochure</a>
  </div>

</section>
<!-- https://www.youtube.com/watch?v=2Rbpb56esyg -->

@push('footer-codes')
<script>
/*(function($){
  $(document).ready(function(){
    var string = "Click here to authenticate Your Product!!!!";
    var str = string.split("");
    var el = document.getElementById('str');
    (function animate() {
      str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
      var running = setTimeout(animate, 90);
    })();
  });
})(jQuery);*/
</script>
<script src="https://rawgit.com/JulianLaval/canvas-particle-network/master/particle-network.min.js" ></script>
<script>
// particle.min.js hosted on GitHub
// Scroll down for initialisation code
!function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?5e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation

var canvasDiv = document.getElementById('particle-canvas');
var options = {
  particleColor: '#fff',
  background: '{{asset('images/8.jpg')}}',
  interactive: true,
  speed: 'fast',
  density: 'high'
};
var particleCanvas = new ParticleNetwork(canvasDiv, options);

</script>
@endpush
