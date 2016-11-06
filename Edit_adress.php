<?php 

 require_once 'inc/session.php';
 require_once 'inc/blade.php';
 require_once 'inc/user_helpers.php';

	require 'inc/dbconnection.php';

	$id = $_GET['id'];

	$sth = $db->prepare("SELECT * FROM adressen WHERE ID=?");
	// controleer of er een foutmelding is ontstaan en zo ja, plaats die dan in $_SESSION['errors'][] = $msg

	if ($sth->execute(array($id)))
	{
  		$adres = $sth->fetch(PDO::FETCH_ASSOC);	
  		if ( $sth->rowCount() == 0 ) $_SESSION['errors'][] = 'Kan event met id '. $id .' niet vinden';
		if ( $sth->rowCount() > 1 ) $_SESSION['errors'][] = 'Je haalt teveel rijen op';
	}
	else
	{
		$_SESSION['errors'][] = 'Het is niet gelukt om de gegevens op te halen.';
	}


	// tell blade to create HTML from the template "login.blade.php"
	echo $blade->view()->make('Backend/adres/Edit_adress')->with('adres', $adres)->withErrors($errors)->render();

