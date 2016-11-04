<?php 

 require_once 'inc/session.php';
 require_once 'inc/blade.php';
 require_once 'inc/user_helpers.php';
 require 'inc/dbconnection.php';

	//$id = mysqli_real_escape_string($db, $_GET['events_id']);

	$sth = $db->prepare("SELECT * FROM adressen ORDER BY Name ASC");
	$sth->execute();

	/* Fetch all of the remaining rows in the result set */
	$adress = $sth->fetchAll(PDO::FETCH_ASSOC);

	// tell blade to create HTML from the template "login.blade.php"
	echo $blade->view()->make('Backend/adres/adressenlijst')->with('adress', $adress)->withErrors($errors)->render();