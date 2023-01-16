<?php
Session_start();
$_SESSION["login"] = "NOTOK";//nije ok vrsimo proveru da li si ulogovan ili nisi,kad se izlogujemo dobijemo da je vr not ok
header('Location: ' . $_SERVER['HTTP_REFERER']);//vrati stranicu i refresuj
