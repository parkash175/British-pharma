
<div id="site-header"class="header bg_dark_blue navbar-dark">
<div id="google_tanslate_element" style="height:0px; width:0px;"></div>
<div class="header_emails_">
  <h5 id="mail1">For query:<br> <i class="far fa-envelope"></i> info@british-pharma.com
  </h5>
  <h5 id="mail2"> For sale:<br><i class="far fa-envelope"></i>   sale@british-pharma.com
  </h5></div>
 
      <nav class="navbar navbar-expand-lg">

        <a class="navbar-brand"  href="<?php echo e(url('/')); ?>"><img class="logo" id="loading"
          src="<?php echo e(asset('images/britishwhitelogo2.png')); ?>" style="margin-left:0px; padding-bottom:34px;">
            <a class="navbar-brand logo_text" href="<?php echo e(url('/')); ?>"> <img class="logo" src="<?php echo e(asset('images/britishwhitelogo.png')); ?>"
              style="margin-left:0px;height:auto; width:95px;  padding-bottom:34px;">
            </a>


          <button class="navbar-toggler p-3" type="button" data-toggle="collapse" style="background-color:#ffd700;"data-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-home" style="color:white;"></i><span class="fa fa-bars " style="color:white;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="background-color: #C5C6C6;" >
              <li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
              </li>
              <li class="nav-item <?php echo e((request()->is('about')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/about')); ?>">About Us</a>
              </li>

              <?php $cats = \App\Categoery::all(); ?>
              <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-item <?php echo e((request()->is('product')) ? 'active' : ''); ?>">
                <a class="nav-link " href="<?php echo e(url('/product/'.$value->id)); ?>"><?php echo e($value->name); ?></a>
              </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-item <?php echo e((request()->is('authentication')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/authentication')); ?>" >Authenticity</a>
              </li>
              
              <!--<li class="nav-item <?php echo e((request()->is('about')) ? 'active' : ''); ?>">-->
                  
              <!-- <a class="nav-link" href="<?php echo e(url('/pdf')); ?>" >Catalog</a>-->
              <!--</li>-->
              <!--images/Brochure.pdf-->
              <li class="nav-item <?php echo e((request()->is('contact')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact Us</a>
              </li>
            </ul>
          </div>

        </nav>



          
            </div>
<?php /**PATH C:\xampp\htdocs\british-backup\resources\views/front/header.blade.php ENDPATH**/ ?>