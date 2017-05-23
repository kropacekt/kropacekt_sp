<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 23.05.2017
 * Time: 17:10
 */

require_once 'inc/connection.inc.php';

$sql[] = "ALTER TABLE zbozi ADD smazano SET('0', '1') AFTER cena";
$sql[] = "UPDATE zbozi SET smazano = '0'";

foreach($sql as $prikaz) {
    mysqli_query($link, $prikaz);
}