<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="tpl/img/favicon.png" type="image/png" sizes="16x16">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="tpl/uvod.css">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="tpl/js/jquery-ui-1.12.1/jquery-ui.min.css">
<script src="tpl/js/jquery-ui-1.12.1/jquery-ui.js"></script>

<!-- Vlastní skripty -->
<script src="tpl/js/script.ajax.js"></script>
<script src="tpl/js/slider.js"></script>
<script src="tpl/js/reloadForm.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Úvodní stránka</title>
</head>
<body>
    <div id="obal">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administrace</a>
                    <!--<p class="navbar-text"><img src="tpl/img/profile/<?php /*echo $id */?>.jpg" width="1%"></p>-->
                    <p class="navbar-text">Přihlášen jako <?php echo $jmeno ?></p>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="uvod.php">Domů</a></li>
                        <li><a href="uvod.php?akce=pridat">Přidat</a></li>
                        <li><a href="uvod.php?akce=editovat">Editovat</a></li>
                        <li><a href="uvod.php?akce=smazat">Smazat</a></li>
                        <li><a href="uvod.php?akce=filtrovat">Filtrovat</a></li>
                        <li><a href="uvod.php?akce=kontakt">Kontakt</a></li>
                        <li>
                            <a class="btn btn-default btn-outline btn-circle" href="uvod.php?akce=odhlasit" data-toggle="collapse" href="#nav-collapse1" aria-expanded="false" aria-controls="nav-collapse1">Odhlásit</a>
                        </li>
                    </ul>
                    <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Graphic design</a></li>
                        <li><a href="#">Print</a></li>
                        <li><a href="#">Motion</a></li>
                        <li><a href="#">Mobile apps</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    </div>
</body>
</html>