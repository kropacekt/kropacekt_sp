<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 21.05.2017
 * Time: 18:01
 */

require_once '../../inc/connection.inc.php';

$typ = mysqli_real_escape_string($link, $_POST['typ']);
$jednotky = mysqli_real_escape_string($link, $_POST['jednotky']);
$cena = mysqli_real_escape_string($link, $_POST['cena']);

$typ = htmlspecialchars($typ);
$jednotky = htmlspecialchars($jednotky);
$cena = intval(htmlspecialchars($cena));

$query = mysqli_query($link, "INSERT INTO zbozi (nazev, jednotky, cena, smazano)
                                     VALUES ('$typ', '$jednotky', $cena, '0')");

if($query) {
    return true;
} else return false;