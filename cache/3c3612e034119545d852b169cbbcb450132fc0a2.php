<?php $__env->startSection('content_backend'); ?>

<h1>Login</h1>

<form class="form-horizontal" role="form" method="post" action="Login_action.php">
		<div class="form-group">
          <label class="control-label col-sm-2" for="Username">Gebruikersnaam</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter username">  
          </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Wachtwoord</label>
		  <div class="col-sm-10">          
			<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
			  <label><input type="checkbox" name="remember" value="checked">Remember me</label>
			</div>
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<input type="submit" name="Login" value="Login" />
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<a href="Register.php">Registreer als je geen account hebt</a>
		  </div>
		</div>
	  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>