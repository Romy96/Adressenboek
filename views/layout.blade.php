<!doctype html>
<html>
<head>
	<title>Adressenboek</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/bf8ab24a40.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="Index.php">Home</a></li>
      <li><a href="Register.php">Registreer</a></li> 
      <li><a href="Adres.php">Lijst</a></li> 
      @if(isset($_SESSION['userName']))
      	<span class="right">{{ $_SESSION['userName'] }}</span>
      	<li><a href="Logout.php" class="navbar-left">Logout</a></li>
      @else
      	<li><a class="right" href="Login.php">Login</a></li> 
      @endif
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
 

@if(isset($errors))       {{-- does $errors exist? --}}
  @if(count($errors)>0)     {{-- does $errors have any errors? --}}
    <div class="control-sidebar-bg"></div>
      <ul>
        @foreach ($errors as $error)   
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
@endif

<!-- content goes here -->
<div class="container">
	<div class="content">
		@yield('content')
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