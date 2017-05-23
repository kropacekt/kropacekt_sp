<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 23.05.2017
 * Time: 17:10
 */

$sql[] = "ALTER TABLE zbozi ADD smazano SET('0', '1') AFTER cena";
$sql[] = "UPDATE zbozi SET smazano = '0'";