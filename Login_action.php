<?php

require_once 'inc/session.php';
require 'inc/dbconnection.php';
require 'inc/user_helpers.php';

// redirect back to login with error if user didn't enter email
if ( empty($_POST['Username']) ) {
	$_SESSION['errors'][] = 'Fout: geen gebruikersnaam ingevuld.';
}
// redirect back to login with error if user didn't enter pass
if ( empty($_POST['pwd']) ) {
	$_SESSION['errors'][] = 'Fout: geen wachtwoord ingevuld.';
}
// check if user can be found

	$resultarray = CheckUserIsValid($db, $_POST['Username'], $_POST['pwd']);

if ( $resultarray['result'] == 1 ) {
	LoginSession($resultarray['userId'], $resultarray['userName']);

	// als gebruiker heeft aangevinkt "onthou mij", bewaar userId en userName dan in cookie
	if ( isset($_POST['remember']) && $_POST['remember'] == "checked") {
		RememberCookie($resultarray['userId'], $resultarray['userName']);
	}

	header('Location: Adressenlijst.php');
	exit();	
}
else
{
	$_SESSION['errors'][] = 'Fout: combinatie van e-mail en wachtwoord niet gevonden, of account niet actief.';
	header('Location: Login.php');
	exit();
}

?>