<?php

 require_once 'inc/session.php';
 require_once 'inc/blade.php';
 require_once 'inc/user_helpers.php';


// tell blade to create HTML from the template "login.blade.php"
echo $blade->view()->make('Backend/adres/create_adress')->withErrors($errors)->render();

?>