<?php
// needs:
// $db = valid PDO connection
// 'users' table with columns: id, email, password, active
// SHA1 encryption on password column
// returns: 
// array [
// 		result => 0 if user not valid, 1 if user/pass exists and active
//		userId => record id from database; null if user not exist
//		userEmail => email address from database; null if user not exist
//		displayname => displayname from database; null if user not exist
// ]
 
function CheckUserIsValid ($db, $userName, $password) {

	// return 0 if email is empty
	if (empty($userName)) {
		return ['result' => 0, 'userId' => null, 'userName' => null];
	}
	// return 0 if password is empty
	if (empty($password)) {
		return ['result' => 0, 'userId' => null, 'userName' => null];
	}
	$enc_password = sha1($password);

	//echo '<p>Password encrypted with SHA: ' . $enc_password . '<br>';
	$statement = $db->prepare('SELECT ID FROM gebruikers where Nickname=? AND Password=?;');
	$statement->execute(array($userName, $enc_password));
	$err = $statement->errorCode();

	$count = $statement->rowCount();
	$row = $statement->fetch(PDO::FETCH_ASSOC);
	$userId = $row['ID'];
	$userName = $row['Nickname'];
	// user/pass combination found; return 1.
	if ($count == 1) {
		return ['result' => 1, 'userId' => $userId, 'userName' => $userName];
	}
	else
	{
		return ['result' => 0, 'userId' => null, 'userName' => null];
	}
}
function IsLoggedIn() {
	// check if cookie contains username (then, if session has no username, fill session as well)
	if ( isset($_COOKIE['userId']) && !isset($_SESSION['userId']) ) {
		LoginSession($_COOKIE['userId'], $_COOKIE['userName']);
		return true;
	}
		// check if session contains username
	if ( isset($_SESSION['userId']) ) {
		return true;
	}
	return false;
}
function LoginSession($userId, $userName) {
	$_SESSION['userId'] = $userId;
	$_SESSION['userName'] = $userName;
}
function RememberCookie($userId, $userName) {
			// bewaar userId in cookie dat 30 dagen geldig blijft
			setcookie("userId", $userId, time() + (86400 * 30), "/"); // 86400 = 1 day
			// bewaar userEmail in cookie dat 30 dagen geldig blijft
			setcookie("userName", $userName, time() + (86400 * 30), "/"); // 86400 = 1 day
			// bewaar displayname in cookie dat 30 dagen geldig blijft
}
function IsLoggedInSession() {
	if (isset($_SESSION['userId'])==false || empty($_SESSION['userId']) ) {
		return 0;
	}
	else
	{
		return 1;
	}
}
function LogOut() {
	$_SESSION['errors'][] = "Logged out.";
	unset($_SESSION['userId'], $_SESSION['userName']);
	// verwijder het cookie door expiration 
	setcookie("userId", null, time() -3600, "/"); // 86400 = 1 day
	setcookie("userName", null, time() -3600, "/"); // 86400 = 1 day
}