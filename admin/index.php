<?php
session_start();

$GLOBALS['config'] =  array(
    'mysql' => array(
        'host' => '68.178.143.149',
        'username' => 'zacbeers',
        'password' => 'WeirdDaddy1!',
        'db' => 'zacbeers'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

spl_autoload_register(function($class){
    require_once '../classes/' . $class . '.php';
});

require_once '../functions/sanitize.php';

$user = new User();
if($user->isLoggedIn()) {
    Redirect::to('../admin.php');
} else {
    Redirect::to('../login.php');
}