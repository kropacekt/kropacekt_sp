<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 29.04.2017
 * Time: 9:49
 */
require_once '../../inc/connection.inc.php';

$sql = "SELECT * FROM uzivatel WHERE nick='".$_GET['nick']."'";
$q = mysqli_query($link, $sql);
$vysledek = mysqli_fetch_assoc($q);

if(count($vysledek))
    echo json_encode($vysledek);
else
    echo false;