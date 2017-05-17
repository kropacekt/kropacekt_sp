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
$cenaOd = intval($_POST['cenaOd']);
$cenaDo = intval($_POST['cenaDo']);

// SQL Injection???? http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php
$query = (mysqli_query($link, "SELECT id, nazev, jednotky, cena
                                            FROM zbozi
                                            WHERE nazev LIKE '$typ%'
                                            AND $jednotky
                                            AND cena BETWEEN $cenaOd AND $cenaDo
                                            /*ORDER BY cena*/"));

$data = '<div class="col-sm-2"></div>
          <div class="col-sm-8">
            <table class="table table-responsive table-hover">';

$data .= '<thead>
            <tr>
                <th>#</th>
                <th>Název</th>
                <th>Jednotky</th>
                <th>Cena</th>
            </tr>
          </thead>';

while($row = mysqli_fetch_assoc($query)) {
    $data .= "<tr>";
    $data .= "<td>".$row['id']."</td>";
    $data .= "<td>".$row['nazev']."</td>";
    $data .= "<td>".$row['jednotky']."</td>";
    $data .= "<td>".$row['cena']."</td>";
    $data .= "</tr>";
}

$data .= '</table></div>';

echo json_encode($data);