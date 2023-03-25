<?php $__env->startSection('content'); ?>
<div class="auth_main_section position-relative overflow-hidden p-0 m-0 -cente>
  <div class="container">
   <?php $__currentLoopData = $single; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row p-5 bg_dark_blue"  style="   background-color: #E5097F; 
  background-image: linear-gradient(#E5097F,#231B1F );" data-aos="zoom-out-down">
  <div class="col-md-4 pl-0" data-aos="zoom-in-down">
  <img src="<?php echo e(asset("images/products")); ?>//<?php echo e($value->pro_img); ?>" class="card-img-top" alt="..." style="border-radius:5%; box-shadow: 10px 10px 10px black;">
  </div>
  <div class="col-md-7 text-white" data-aos="fade-up-left">
    <h3 class="title"><b></b><?php echo e($value->pro_name); ?></h3>
    <h4 class="text-left">Description:</h4>
    <p style="color:white;font-family:'Arial', san-serif;"><?php echo e($value->pro_desc); ?></p>
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
     <h6><b>Composition: </b><?php echo e($value->composition); ?></h6>
     <h6><b>Packing: </b><?php echo e($value->packing); ?></h6>
     <h6><b>Formula: </b><?php echo e($value->formula); ?></h6>
     <h6><b>Molecular Mass: </b><?php echo e($value->molecular_mass); ?></h6>
     <h6><b>Anabolic/Androgenic Ratio: </b><?php echo e($value->anabolic); ?></h6>
     <h6><b>Dosage: </b><?php echo e($value->dosage); ?></h6>
  <hr style="border:3px solid #f1f1f1">
  </div>
</div>
  </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
<?php $__env->startPush('headerstyle'); ?>
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
  background-image: url('<?php echo e(url('images/7.jpg')); ?>');
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
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\british-backup\resources\views/front/single.blade.php ENDPATH**/ ?>