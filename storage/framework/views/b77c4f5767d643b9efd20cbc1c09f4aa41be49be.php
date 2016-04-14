<?php $__env->startSection('content'); ?>

<div class="container">
      <br><br>
      <h1 class="header center orange-text">Mera PMS Dashboard Page</h1>
      <div class="row center">
        <h5 class="header col s12 light">HOME PAGE OR LANDING PAGE</h5>
      </div>
      <div class="row center">
        <a href="#" 
           id="download-button" class="btn-large waves-effect waves-light orange">
            Get Started</a>
      </div>
      <br><br>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>