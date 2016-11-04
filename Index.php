<?php 

 require_once 'inc/session.php';
 require_once 'inc/blade.php';
 require_once 'inc/user_helpers.php';
 require 'inc/dbconnection.php';

// output everything
echo $blade->view()->make('index')->withErrors($errors)->render();