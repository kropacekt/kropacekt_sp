<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 17.05.2017
 * Time: 17:14
 */

require_once '../../inc/connection.inc.php';

$typ = ($_POST['typ'] == "vse") ? "" : $_POST['typ'];
$jednotky = ($_POST['jednotky'] == "vse") ? ("jednotky LIKE '%'") : ("jednotky = '".$_POST['jednotky']."'");

$cenaOd = intval(htmlspecialchars(mysqli_real_escape_string($link, $_POST['cenaOd'])));
$cenaDo = intval(htmlspecialchars(mysqli_real_escape_string($link, $_POST['cenaDo'])));

// SQL Injection mohlo byt reseno i takto -> http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php
$query = mysqli_query($link, "SELECT id, nazev, jednotky, cena
                                            FROM zbozi
                                            WHERE nazev LIKE '$typ%'
                                            AND $jednotky
                                            AND cena BETWEEN $cenaOd AND $cenaDo
                                            AND smazano = '0'
                                            /*ORDER BY cena*/");


$data = [];
$i = 0;

while($row = mysqli_fetch_assoc($query)) {

    //kvuli zamrzani browseru, ne uplne korektni
    if($i < 1000) {
        $i++;
        $data[] = ["id" => $row['id'], "nazev" => $row['nazev'], "jednotky" => $row['jednotky'], "cena" => intval($row["cena"])];
    } else break;

}

echo json_encode($data);