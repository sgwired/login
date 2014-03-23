<?php
require_once 'core/init.php';

//$user = DB::getInstance()->query('SELECT username FROM usersd WHERE username = ?', array('fred'));
//$user = DB::getInstance()->get('users', array('username', '=', 'alex'));



//$db = DB::getInstance();

////$db->get('users', array('username', '=', 'alex'));
////$db->query('SELECT * FROM users');
//if(!$db->count()) {
//    echo ' no user ';
//} else {
//    echo $db->first()->username;
//    foreach($db->results()as $db) {
//        echo $db->username. '<br/>';
//    }
//    
//}


// inserting 

$user = DB::getInstance()->update('users', 3, array(
    'username' => 'dale',
    'password' => 'newpassword',
    'name' => 'Dale Garrett'

));