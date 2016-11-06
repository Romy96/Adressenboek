<?php

require_once 'inc/session.php';
require 'inc/dbconnection.php';

$id = $_GET['id'];

$sth = $db->prepare("DELETE FROM adressen WHERE ID=?");
// controleer of er een foutmelding is ontstaan en zo ja, plaats die dan in $_SESSION['errors'][] = $msg

if ($sth->execute(array($id)))
{
  	if ( $sth->rowCount() == 0 ) $_SESSION['errors'][] = 'Kan event met id '. $id .' niet vinden';
	if ( $sth->rowCount() > 1 ) $_SESSION['errors'][] = 'Je verwijderd teveel rijen';
	if ( $sth->rowCount() == 1 ) $_SESSION['errors'][] = 'Het geselecteerde adres is verwijderd uit de database';
	header("location: Adressenlijst.php");
}
else
{
	$_SESSION['errors'][] = 'Het is niet gelukt om de gegevens op te halen.';
	header("location: Adressenlijst.php");
}

?>