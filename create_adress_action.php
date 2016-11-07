<?php

require_once 'inc/session.php';
require 'inc/dbconnection.php';

if ( ! isset ($_POST['submit']) )
	{
		$_SESSION['errors'][] = 'U moet wel iets invullen.';
		header('Location: create_adress.php');
}

$naam = $_POST['naam'];
$Email = $_POST['Email'];
$Home = $_POST['Home'];
$Zip = $_POST['Zip'];


if (empty($naam) || empty($Email) || empty($Home) || empty($Zip)) {
	$_SESSION['errors'][] = 'Er zijn sommige velden die nog niet ingevuld zijn';
	header('Location: create_adress.php');
}


$sql = $db->prepare("SELECT * FROM adressen WHERE Name=? AND Email_adress=? AND Home_adress=? AND Zip_code=?");
if ($sql->execute(array($naam, $Email, $Home, $Zip))) {
	if ( $sql->rowCount() > 0 ) {
		$_SESSION['errors'][] = 'Sorry. De gegevens die je ingevuld hebt bestaan al.';
		header('Location: create_adress.php');
	} 
}

$sth = $db->prepare("INSERT INTO adressen (Name, Email_adress, Home_adress, Zip_code) VALUES (?, ?, ?, ?)");
if ($sth->execute(array($naam, $Email, $Home, $Zip))) {
	$_SESSION['errors'][] = 'De gegevens zijn ingevuld en opgeslagen in de database.';
	header('Location: Adressenlijst.php');
}
else
{
	$_SESSION['errors'][] = 'Er is iets fout gegaan in de database. Probeer het later nog eens.';
	header('Location: create_adress.php');
}

?>