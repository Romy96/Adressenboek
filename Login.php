<?php 

 require_once 'inc/session.php';
 require_once 'inc/blade.php';
 require_once 'inc/user_helpers.php';


if ( IsLoggedInSession()==true ) {
	// stuur direct door naar main pagina
	header('location: Adressenlijst.php');
	exit();
}
else
{
// output everything
echo $blade->view()->make('Backend/Login')->withErrors($errors)->render();
}