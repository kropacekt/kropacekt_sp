<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 28.04.2017
 * Time: 23:06
 */

session_start();

require_once 'inc/connection.inc.php';

if(empty($_SESSION)) {
    include 'tpl/index.html';
} else {
    header('Location: uvod.php');
}

if(isset($_POST['login'])) {
    $password = md5($_POST['password']);

    $query = mysqli_query($link, "
        SELECT *
        FROM uzivatel
        WHERE nick = '" . $_POST['nick'] . "'
        AND heslo = '$password'
    ");

    if (count($user=mysqli_fetch_assoc($query))) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['jmeno'] = $user['jmeno'];
        $_SESSION['nick'] = $user['nick'];

        header('Location: uvod.php');
    }
}