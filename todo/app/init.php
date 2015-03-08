<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=zacbeers2;host=68.178.217.42 ', 'zacbeers2', 'WeirdDaddy1!');

if(!isset($_SESSION['user_id'])) {
    die('You are not signed in.');
}