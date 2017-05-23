<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 23.05.2017
 * Time: 13:55
 */

require_once '../../inc/connection.inc.php';

$input = filter_input_array(INPUT_POST);
$j = [1 => "BA", "BM", "KG", "KS", "L", "M", "M2", "M3", "PÁR", "Q", "SAD"];

$id = intval($input['id']);
$nazev = htmlspecialchars(mysqli_real_escape_string($link, $_POST['nazev']));
$jednotky = htmlspecialchars(mysqli_real_escape_string($link, $j[$input['jednotky']]));
$cena = intval(htmlspecialchars(mysqli_real_escape_string($link, $_POST['cena'])));

if ($input['action'] === 'edit') {
    mysqli_query($link, "UPDATE zbozi SET nazev = '$nazev', jednotky = '$jednotky', cena = $cena WHERE id = $id");

} else if ($input['action'] === 'delete') {
    mysqli_query($link, "UPDATE zbozi SET smazano = '1' WHERE id = $id");

} else if ($input['action'] === 'restore') {
    mysqli_query($link, "UPDATE zbozi SET smazano = '0' WHERE id = $id");

}

echo json_encode($input);
