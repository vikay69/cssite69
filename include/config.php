<?php

$link = mysql_connect("localhost","root","flashwebhost") or die('Unable to connect to database');
$db = mysql_select_db('cssite69') or die('Unable to select DB');

define('BASE_URL', 'http://localhost/cssite69/');

session_start();

