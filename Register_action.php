<?php

require 'inc/dbconnection.php';
require 'inc/session.php';

if ( ! isset ($_POST['submit']) )
{
	$_SESSION['errors'][] = "U moet wel iets invullen.";
	header('Location: Register.php');
	exit();
}

$Gebruikersnaam = $_POST['Username'];
$Wachtwoord = $_POST['pwd'];

if ( empty($_POST['Username']) || empty($_POST['pwd'])) {
	$_SESSION['errors'][] = 'Één van de velden of beiden velden zijn niet ingevuld.';
	header('Location: Register.php');
	exit();
}

$sql = $db->prepare("SELECT * FROM gebruikers WHERE Nickname=?");
if ($sql->execute(array($Gebruikersnaam)))
	{
		if ( $sql->rowCount() > 0 ) $_SESSION['errors'][] = 'Deze gebruikersnaam bestaat al! Vul een ander gebruikernaam in.';
		header('Location: Register.php');
		exit();
	}

$sth = $db->prepare("INSERT INTO gebruikers (Nickname, Password) VALUES (?, ?)");
if ($sth->execute(array($Gebruikersnaam, $Wachtwoord)))
{
	$_SESSION['errors'][] = 'De gegevens zijn ingevuld en opgeslagen in de database.';
	header('Location: Index.php');
	exit();
}
else
{
	$_SESSION['errors'][] = 'Er is iets fout gegaan in de database. Probeer het later nog eens.';
	header('Location: Register.php');
	exit();
}

?>