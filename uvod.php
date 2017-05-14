<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 29.04.2017
 * Time: 15:29
 */
session_start();
require_once 'inc/connection.inc.php';

$id = $_SESSION['id'];
$jmeno = $_SESSION['jmeno'];
$nick = $_SESSION['nick'];

include 'inc/uvod.inc.php';
include "inc/funkce.inc.php";

if(isset($_POST['filtrovat'])) {
    $typ = ($_POST['typ'] == "vse") ? "" : $_POST['typ'];
    $jednotky = ($_POST['jednotky'] == "vse") ? ("jednotky LIKE '%'") : ("jednotky = '".$_POST['jednotky']."'");
    $cenaOd = intval($_POST['cenaOd']);
    $cenaDo = intval($_POST['cenaDo']);

    // SQL Injection???? http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php
    $query = (mysqli_query($link, "SELECT nazev, jednotky, cena
                                            FROM zbozi
                                            WHERE nazev LIKE '$typ%'
                                            AND $jednotky
                                            AND cena BETWEEN $cenaOd AND $cenaDo
                                            ORDER BY cena"));

    echo '<div class="col-sm-2"></div>
          <div class="col-sm-8">
            <table class="table table-responsive table-hover">';

    echo '<thead>
            <tr>
                <th>Název</th>
                <th>Jednotky</th>
                <th>Cena</th>
            </tr>
          </thead>';

    while($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row['nazev']."</td>";
        echo "<td>".$row['jednotky']."</td>";
        echo "<td>".$row['cena']."</td>";
        echo "</tr>";
    }

    echo '</table></div>';
}