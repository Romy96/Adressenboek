<?php

require_once 'inc/session.php';
require 'inc/dbconnection.php';


$naam = $_POST['naam'];
$Email = $_POST['Email'];
$Home = $_POST['Home'];
$Zip = $_POST['Zip'];
$id = $_POST['id'];

$sql = $db->prepare("UPDATE adressen SET Name=?, Email_adress=?, Home_adress=?, Zip_code=? WHERE ID=?");
if ($sql->execute(array($naam, $Email, $Home, $Zip, $id)))
	{
  		if ( $sql->rowCount() == 0 ) $_SESSION['errors'][] = 'Kan adres met id '. $id .' niet vinden';
		if ( $sql->rowCount() > 1 ) $_SESSION['errors'][] = 'Je wijzigt teveel rijen';
		header('location: Edit_adress.php?id=' . $id);
	}
	else
	{
		$_SESSION['errors'][] = 'Het is niet gelukt om de gegevens op te slaan.';
		header('location: Edit_adress.php?id=' . $id);
	}

	if ( $sql->rowCount() == 1 ) {
		$_SESSION['errors'][] = 'Het adres is aangepast';
		header("location: Adressenlijst.php");
	} 
?>