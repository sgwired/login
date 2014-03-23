<?php
require_once 'core/init.php';

//$user = DB::getInstance()->query('SELECT username FROM usersd WHERE username = ?', array('fred'));
$user = DB::getInstance()->get('users', array('username', '=', 'alex'));
$db = DB::getInstance();
        $db->get('users', array('username', '=', 'alex'));
if(!$db->count()) {
    echo ' no user ';
} else {
    echo 'success';
    
}