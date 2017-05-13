<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 29.04.2017
 * Time: 15:29
 */
session_start();

//print_r($_SESSION);
$id = $_SESSION['id'];
$jmeno = $_SESSION['jmeno'];
$nick = $_SESSION['nick'];

include 'tpl/uvod.php';
include "tpl/php/funkce.inc.php";
require_once 'inc/connection.inc.php';
