<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 29.04.2017
 * Time: 15:29
 */
//session_start();
require_once 'inc/connection.inc.php';

$id = $_SESSION['id'];
$jmeno = $_SESSION['jmeno'];
$nick = $_SESSION['nick'];

include 'inc/uvod.inc.php';
include "inc/funkce.inc.php";
