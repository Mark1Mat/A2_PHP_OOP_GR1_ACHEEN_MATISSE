<?php
/**
 * Created by PhpStorm.
 * User: Matisse
 * Date: 15/01/2015
 * Time: 19:01
 */
session_start();

$_SESSION = array();

session_unset();

session_destroy();

header('Location: index.php');


