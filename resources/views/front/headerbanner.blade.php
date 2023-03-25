@push('header-codes')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css')}}">

@endpush
<style>
 #particles {
  background: url('{{asset("images/new_images/NEWBN01.png")}}');
  background-size: cover;
  background-repeat: no-repeat;
  max-width: 100%;
  height: 100%;
  overflow: hidden;
  animation:slider 8s infinite linear;
}


/*@keyframes slider{*/
/*    0%{background: url('{{asset("images/new_images/NEWBN01.png")}}');}*/
/*   50%{background: url('{{asset("images/new_images/NEWBN02.png")}}');}*/
/*    70%{background: url('{{asset("images/new_images/NEWBN03.png")}}');}*/
    
}
@media only screen and (max-width:991px){
         #particles{
        
  /*background: url('{{asset("images/new_images/NEWBN01.png")}}');*/
  /*background-size: cover;*/
  /*background-repeat: no-repeat;*/
  min-width: 30%;
  height: 60%;
  overflow: hidden;
  animation:slider 8s infinite linear;
}

}






#intro {
  position: absolute;
  left: 0;
  top: 51%;
  padding: 0 20px;
  width: 100%;
  text-align:right;
  top:70%;
}
@media (max-width:600px) {
 #intro{
  top:48%;
  }
}
.overlay {
  position: fixed;
  background: ;
  top:10;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
}
@keyframes slide-up {
  0% {
    transform: TranslateY(250px)
  }
  100% {
    transform: TranslateY(0px)
  }
}
.pra
{
    font-size:60px;
   font-family: 'Goblin One', cursive;
      animation-duration: 4s;
  animation-name: slide-up;
    text-align:center;
    color:#C0C0C0;
}

h4 {
  text-transform:lowercase;
  font-size: 40px;
  font-weight: 700;
  letter-spacing: 0.015em;
  animation: slide-up 1s ease;

}
h1::after {
  content: '';
  width: 80px;
  display: block;
  background: #fff;
  height: 10px;
  margin: 30px auto;
  line-height: 1.1;
}
p {
  margin: 0 0 30px 0;
  font-size: 24px;
}
img
{
height:700px;
width:100%;
background-repeat: no-repeat;
background-size: cover;
position: relative;
}
@media only screen and (max-width:600px){
  #particles{
  height:450px ;
  width:100%;
  }
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


 /* .hero-text h1{
   font-size: 55px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
 }

.hero-text{
  position: absolute;
    z-index: 9;
    left: -150%;
    top:37%;
    transform: translate(-10%, -40%);
    color:white;
    font-family: Futura BT;

    font-size: 32px;
    margin: 0px 0px 0px 0px;
    text-align: right;
    animation: slideFromLeft 2s linear 1s forwards;
}
.hero-text p
{
padding-left: 32px;
font-size: 32px;
color:black;
} */

@keyframes slideFromLeft {
  0% {
    left: -100%;
  }
  100% {
    left: 50%;
  }
}

/* Ipad Screen */
@media only screen and (max-width:991px) and (min-width:768px){
  .hero-text {
    transform: translate(-40%, -40%);
  }
}
/*mobile screen*/
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
/* @media only screen and (min-width:771px){
  .list-group {
    display: none;
  }
} */
@media only screen and (min-width:768px){
  #img2 {
    display:none;
  }
}
@media only screen and (min-width:768px){
  .dropdown {
    display: none;
  }
}

@media (max-width:829px) {
 .hero-text{
    display: none;
  }
}
.list-group-item
{
  margin:0px;
  padding: 0px;
  color: #2F4F4F;
}
#img1{
  height:95vh;
  width:98%;
  padding-top:0px;
  margin: 0px;
  transform: translate(-%, 0%);
}
#particle-canvas {
  position: absolute!important;
  z-index:1;
  width: 100%;
  height: 100%;
  
}

.banner_sidebar .list-group .list-group-item{
  padding:5px 15px 10px 30px;
  font-family: 'Poppins', san-serif;
  font-size: 16px;
  background:transparent;
  border-bottom: 1px solid #ccc;
  transition: all .3s ease;
  font-weight:400;
    background-color: white;

}
.banner_sidebar .list-group-item:hover
{
  color: #000000;
  background-color:#DCDCDC;
}
.banner_sidebar .list-group-item:active
{
  color:#fa253e;
}

.banner_sidebar h3 .list-group-item:hover
{
  color:#EBECEC;
}

.banner_sidebar .list-group h3 .list-group-item
{
  font-size: 20px;
  padding:10px 15px;
  background-color:#08759C;
}



</style>

<section class="banner_home p-0 m-0 d-flex align-items-center justify-content-start position-relative ">

<div class="container-fluid">
<div class="row">
  <!--<img id="img2" src="{{asset('images/new_images/banner.png')}}">-->

  <div class="col-md-4 col-lg-3  banner_sidebar">
    <div id="scrollY" style="height:500px; overflow:auto;">
    <div class="list-group" >
  <h3><a href="#" class="list-group-item list-group-item-action mt-4 active"><i class="fas fa-syringe mr-2"></i> Injectables</a></h3>
<?php $db=DB::table('product')->where('cid','6')->get(); ?>

@foreach($db as $values)
  <a href="{{ url('/detail/'.$values->id)}}" class="list-group-item list-group-item-action">{{$values->pro_name}}</a>
@endforeach
<h3><a href="#" class="list-group-item list-group-item-action active"><i class="fas fa-capsules mr-2"></i> Orals</a></h3>
<?php $db2=DB::table('product')->where('cid','5')->get(); ?>
@foreach($db2 as $value)
<a href="{{ url('/detail/'.$value->id)}}" class="list-group-item list-group-item-action">{{$value->pro_name}}</a>
@endforeach

</div>
</div>
<!-- <div class="list-group" style="">

</div> -->

</div>

<div class="col-md-8 col-lg-9 img1 p-0" >
  <div id="particles">
  <div class="overlay"></div>
  <div id="intro">
    <p class="pra">Fitness is not a destination<br> it is a way of life...</p>

  </div>
</div>
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
(function(window, document) {
  "use strict";
  var pluginName = 'particleground';

  // http://youmightnotneedjquery.com/#deep_extend
  function extend(out) {
    out = out || {};
    for (var i = 1; i < arguments.length; i++) {
      var obj = arguments[i];
      if (!obj) continue;
      for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
          if (typeof obj[key] === 'object')
            deepExtend(out[key], obj[key]);
          else
            out[key] = obj[key];
        }
      }
    }
    return out;
  };

  var $ = window.jQuery;

  function Plugin(element, options) {
    var canvasSupport = !!document.createElement('canvas').getContext;
    var canvas;
    var ctx;
    var particles = [];
    var raf;
    var mouseX = 0;
    var mouseY = 0;
    var winW;
    var winH;
    var desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i);
    var orientationSupport = !!window.DeviceOrientationEvent;
    var tiltX = 0;
    var pointerX;
    var pointerY;
    var tiltY = 0;
    var paused = false;

    options = extend({}, window[pluginName].defaults, options);

    /**
     * Init
     */
    function init() {
      if (!canvasSupport) { return; }

      //Create canvas
      canvas = document.createElement('canvas');
      canvas.className = 'pg-canvas';
      canvas.style.display = 'block';
      element.insertBefore(canvas, element.firstChild);
      ctx = canvas.getContext('2d');
      styleCanvas();

      // Create particles
      var numParticles = Math.round((canvas.width * canvas.height) / options.density);
      for (var i = 0; i < numParticles; i++) {
        var p = new Particle();
        p.setStackPos(i);
        particles.push(p);
      };

      window.addEventListener('resize', function() {
        resizeHandler();
      }, false);

      document.addEventListener('mousemove', function(e) {
        mouseX = e.pageX;
        mouseY = e.pageY;
      }, false);

      if (orientationSupport && !desktop) {
        window.addEventListener('deviceorientation', function () {
          // Contrain tilt range to [-30,30]
          tiltY = Math.min(Math.max(-event.beta, -30), 30);
          tiltX = Math.min(Math.max(-event.gamma, -30), 30);
        }, true);
      }

      draw();
      hook('onInit');
    }

    /**
     * Style the canvas
     */
    function styleCanvas() {
      canvas.width = element.offsetWidth;
      canvas.height = element.offsetHeight;
      ctx.fillStyle = options.dotColor;
      ctx.strokeStyle = options.lineColor;
      ctx.lineWidth = options.lineWidth;
    }

    /**
     * Draw particles
     */
    function draw() {
      if (!canvasSupport) { return; }

      winW = window.innerWidth;
      winH = window.innerHeight;

      // Wipe canvas
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      // Update particle positions
      for (var i = 0; i < particles.length; i++) {
        particles[i].updatePosition();
      };
      // Draw particles
      for (var i = 0; i < particles.length; i++) {
        particles[i].draw();
      };

      // Call this function next time screen is redrawn
      if (!paused) {
        raf = requestAnimationFrame(draw);
      }
    }

    /**
     * Add/remove particles.
     */
    function resizeHandler() {
      // Resize the canvas
      styleCanvas();

      var elWidth = element.offsetWidth;
      var elHeight = element.offsetHeight;

      // Remove particles that are outside the canvas
      for (var i = particles.length - 1; i >= 0; i--) {
        if (particles[i].position.x > elWidth || particles[i].position.y > elHeight) {
          particles.splice(i, 1);
        }
      };

      // Adjust particle density
      var numParticles = Math.round((canvas.width * canvas.height) / options.density);
      if (numParticles > particles.length) {
        while (numParticles > particles.length) {
          var p = new Particle();
          particles.push(p);
        }
      } else if (numParticles < particles.length) {
        particles.splice(numParticles);
      }

      // Re-index particles
      for (i = particles.length - 1; i >= 0; i--) {
        particles[i].setStackPos(i);
      };
    }

    /**
     * Pause particle system
     */
    function pause() {
      paused = true;
    }

    /**
     * Start particle system
     */
    function start() {
      paused = false;
      draw();
    }

    /**
     * Particle
     */
    function Particle() {
      this.stackPos;
      this.active = true;
      this.layer = Math.ceil(Math.random() * 3);
      this.parallaxOffsetX = 0;
      this.parallaxOffsetY = 0;
      // Initial particle position
      this.position = {
        x: Math.ceil(Math.random() * canvas.width),
        y: Math.ceil(Math.random() * canvas.height)
      }
      // Random particle speed, within min and max values
      this.speed = {}
      switch (options.directionX) {
        case 'left':
          this.speed.x = +(-options.maxSpeedX + (Math.random() * options.maxSpeedX) - options.minSpeedX).toFixed(2);
          break;
        case 'right':
          this.speed.x = +((Math.random() * options.maxSpeedX) + options.minSpeedX).toFixed(2);
          break;
        default:
          this.speed.x = +((-options.maxSpeedX / 2) + (Math.random() * options.maxSpeedX)).toFixed(2);
          this.speed.x += this.speed.x > 0 ? options.minSpeedX : -options.minSpeedX;
          break;
      }
      switch (options.directionY) {
        case 'up':
          this.speed.y = +(-options.maxSpeedY + (Math.random() * options.maxSpeedY) - options.minSpeedY).toFixed(2);
          break;
        case 'down':
          this.speed.y = +((Math.random() * options.maxSpeedY) + options.minSpeedY).toFixed(2);
          break;
        default:
          this.speed.y = +((-options.maxSpeedY / 2) + (Math.random() * options.maxSpeedY)).toFixed(2);
          this.speed.x += this.speed.y > 0 ? options.minSpeedY : -options.minSpeedY;
          break;
      }
    }

    /**
     * Draw particle
     */
    Particle.prototype.draw = function() {
      // Draw circle
      ctx.beginPath();
      ctx.arc(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY, options.particleRadius / 2, 0, Math.PI * 2, true);
      ctx.closePath();
      ctx.fill();

      // Draw lines
      ctx.beginPath();
      // Iterate over all particles which are higher in the stack than this one
      for (var i = particles.length - 1; i > this.stackPos; i--) {
        var p2 = particles[i];

        // Pythagorus theorum to get distance between two points
        var a = this.position.x - p2.position.x
        var b = this.position.y - p2.position.y
        var dist = Math.sqrt((a * a) + (b * b)).toFixed(2);

        // If the two particles are in proximity, join them
        if (dist < options.proximity) {
          ctx.moveTo(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY);
          if (options.curvedLines) {
            ctx.quadraticCurveTo(Math.max(p2.position.x, p2.position.x), Math.min(p2.position.y, p2.position.y), p2.position.x + p2.parallaxOffsetX, p2.position.y + p2.parallaxOffsetY);
          } else {
            ctx.lineTo(p2.position.x + p2.parallaxOffsetX, p2.position.y + p2.parallaxOffsetY);
          }
        }
      }
      ctx.stroke();
      ctx.closePath();
    }

    /**
     * update particle position
     */
    Particle.prototype.updatePosition = function() {
      if (options.parallax) {
        if (orientationSupport && !desktop) {
          // Map tiltX range [-30,30] to range [0,winW]
          var ratioX = (winW - 0) / (30 - -30);
          pointerX = (tiltX - -30) * ratioX + 0;
          // Map tiltY range [-30,30] to range [0,winH]
          var ratioY = (winH - 0) / (30 - -30);
          pointerY = (tiltY - -30) * ratioY + 0;
        } else {
          pointerX = mouseX;
          pointerY = mouseY;
        }
        // Calculate parallax offsets
        this.parallaxTargX = (pointerX - (winW / 2)) / (options.parallaxMultiplier * this.layer);
        this.parallaxOffsetX += (this.parallaxTargX - this.parallaxOffsetX) / 10; // Easing equation
        this.parallaxTargY = (pointerY - (winH / 2)) / (options.parallaxMultiplier * this.layer);
        this.parallaxOffsetY += (this.parallaxTargY - this.parallaxOffsetY) / 10; // Easing equation
      }

      var elWidth = element.offsetWidth;
      var elHeight = element.offsetHeight;

      switch (options.directionX) {
        case 'left':
          if (this.position.x + this.speed.x + this.parallaxOffsetX < 0) {
            this.position.x = elWidth - this.parallaxOffsetX;
          }
          break;
        case 'right':
          if (this.position.x + this.speed.x + this.parallaxOffsetX > elWidth) {
            this.position.x = 0 - this.parallaxOffsetX;
          }
          break;
        default:
          // If particle has reached edge of canvas, reverse its direction
          if (this.position.x + this.speed.x + this.parallaxOffsetX > elWidth || this.position.x + this.speed.x + this.parallaxOffsetX < 0) {
            this.speed.x = -this.speed.x;
          }
          break;
      }

      switch (options.directionY) {
        case 'up':
          if (this.position.y + this.speed.y + this.parallaxOffsetY < 0) {
            this.position.y = elHeight - this.parallaxOffsetY;
          }
          break;
        case 'down':
          if (this.position.y + this.speed.y + this.parallaxOffsetY > elHeight) {
            this.position.y = 0 - this.parallaxOffsetY;
          }
          break;
        default:
          // If particle has reached edge of canvas, reverse its direction
          if (this.position.y + this.speed.y + this.parallaxOffsetY > elHeight || this.position.y + this.speed.y + this.parallaxOffsetY < 0) {
            this.speed.y = -this.speed.y;
          }
          break;
      }

      // Move particle
      this.position.x += this.speed.x;
      this.position.y += this.speed.y;
    }

    /**
     * Setter: particle stacking position
     */
    Particle.prototype.setStackPos = function(i) {
      this.stackPos = i;
    }

    function option (key, val) {
      if (val) {
        options[key] = val;
      } else {
        return options[key];
      }
    }

    function destroy() {
      console.log('destroy');
      canvas.parentNode.removeChild(canvas);
      hook('onDestroy');
      if ($) {
        $(element).removeData('plugin_' + pluginName);
      }
    }

    function hook(hookName) {
      if (options[hookName] !== undefined) {
        options[hookName].call(element);
      }
    }

    init();

    return {
      option: option,
      destroy: destroy,
      start: start,
      pause: pause
    };
  }

  window[pluginName] = function(elem, options) {
    return new Plugin(elem, options);
  };

  window[pluginName].defaults = {
    minSpeedX: 0.1,
    maxSpeedX: 0.7,
    minSpeedY: 0.1,
    maxSpeedY: 0.7,
    directionX: 'center', // 'center', 'left' or 'right'. 'center' = dots bounce off edges
    directionY: 'center', // 'center', 'up' or 'down'. 'center' = dots bounce off edges
    density: 10000, // How many particles will be generated: one particle every n pixels
    dotColor: '#666666',
    lineColor: '#666666',
    particleRadius: 7, // Dot size
    lineWidth: 1,
    curvedLines: false,
    proximity: 100, // How close two dots need to be before they join
    parallax: true,
    parallaxMultiplier: 5, // The lower the number, the more extreme the parallax effect
    onInit: function() {},
    onDestroy: function() {}
  };

  // nothing wrong with hooking into jQuery if it's there...
  if ($) {
    $.fn[pluginName] = function(options) {
      if (typeof arguments[0] === 'string') {
        var methodName = arguments[0];
        var args = Array.prototype.slice.call(arguments, 1);
        var returnVal;
        this.each(function() {
          if ($.data(this, 'plugin_' + pluginName) && typeof $.data(this, 'plugin_' + pluginName)[methodName] === 'function') {
            returnVal = $.data(this, 'plugin_' + pluginName)[methodName].apply(this, args);
          }
        });
        if (returnVal !== undefined){
          return returnVal;
        } else {
          return this;
        }
      } else if (typeof options === "object" || !options) {
        return this.each(function() {
          if (!$.data(this, 'plugin_' + pluginName)) {
            $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
          }
        });
      }
    };
  }

})(window, document);

/**
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * @license: MIT license
 */
(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                 || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); },
          timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };

    if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
}());

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#eee',
    lineColor: '#eee'
    
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);

</script>
@endpush
