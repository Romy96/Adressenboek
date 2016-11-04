<!doctype html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet">
	<title>Adressenboek</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/bf8ab24a40.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="Index.php">Home</a></li>
      <li><a href="Register.php">Registreer</a></li> 
      <li><a href="Adres.php">Lijst</a></li> 
      <?php if(isset($_SESSION['userName'])): ?>
      	<span class="right"><?php echo e($_SESSION['userName']); ?></span>
      	<li><a href="Logout.php" class="navbar-left">Logout</a></li>
      <?php else: ?>
      	<li><a href="Login.php" class="navbar-left">Login</a></li> 
      <?php endif; ?>
    </ul>
  </div>
</nav>


<?php
   if ( isset($_SESSION['errors'])) {
      $errors = $_SESSION['errors'];
      $_SESSION['errors'] = array();  // remove all errors
   } 
   else
   {
      $_SESSION['errors'] = array();
   }
 ?>
 

<?php if(isset($errors)): ?>       
  <?php if(count($errors)>0): ?>     
    <div class="control-sidebar-bg"></div>
      <ul>
        <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>   
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>
<?php endif; ?>

<!-- content goes here -->
<div class="container">
	<div class="content">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
</div>


<div style="display:none;" class="debugbar">
	<div class="debugbar-inner">
		<div class="col">
			<h3>Cookie contents: </h3>
			<p><?php print_r($_COOKIE); ?></p>
		</div>

		<div class="col">
			<h3>Session contents: </h3>
			<p><?php print_r($_SESSION); ?></p>
		</div>

	</div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>