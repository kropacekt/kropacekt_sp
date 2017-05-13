<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 13.05.2017
 * Time: 10:33
 */
require_once 'inc/connection.inc.php';

if(isset($_GET['akce'])) {
    $akce = $_GET['akce'];

    if($akce == "pridat") {
        echo "Přidat záznam";
        //include "tpl/formular.inc.php";
    }

    if($akce == "editovat") {
        echo "Editovat záznam";
        //include "tpl/formular.inc.php";
    }

    if($akce == "smazat") {
        echo "Smazat záznam";
        //include "tpl/formular.inc.php";
    }

    if($akce == "filtrovat") {
        include "tpl/php/formular.inc.php";
        $query = mysqli_query($link, "SELECT DISTINCT(jednotky) FROM zbozi ORDER BY jednotky");
        $data = [];

        while(($row=mysqli_fetch_array($query))) {
            $data[] = $row["jednotky"];
        }

        $_SESSION["data"] = $data;
    }

    if($akce == "kontakt") {
        echo "Kontakt";
        //include "tpl/formular.inc.php";
    }

    if($akce == "odhlasit") {
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
}