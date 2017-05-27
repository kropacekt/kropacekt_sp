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
        $query1 = mysqli_query($link, "SELECT DISTINCT(jednotky) FROM zbozi ORDER BY jednotky");
        $jednotky = [];

        while(($row=mysqli_fetch_array($query1))) {
            $jednotky[] = $row["jednotky"];
        }

        include "inc/formPridani.inc.php";
    }

    if($akce == "filtrovat") {
        $query1 = mysqli_query($link, "SELECT DISTINCT(jednotky) FROM zbozi ORDER BY jednotky");
        $query2 = mysqli_query($link, "SELECT DISTINCT(SUBSTRING_INDEX(nazev,' ', 1)) AS typy FROM zbozi");

        $jednotky = [];
        $typy = [];

        while(($row=mysqli_fetch_array($query1))) {
            $jednotky[] = $row["jednotky"];
        }

        while(($row=mysqli_fetch_array($query2))) {
            $typy[] = $row["typy"];
        }

        include "inc/formFiltrace.inc.php";
    }

    if($akce == "odhlasit") {
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
} else {
    include "inc/homepage.inc.php";
}