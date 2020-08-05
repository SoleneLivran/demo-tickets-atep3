<?php

$error = '';

if (!empty($_GET)) {
  $title          = $_GET['inputTitle'] ?? '';
  $company        = $_GET['inputCompany'] ?? '';
  $room           = $_GET['inputRoom'] ?? '';
  $places         = $_GET['inputPlacesNbr'] ?? '';
  $datetimeInput  = $_GET['inputDateTime'] ?? '';
  $spectatorsStr  = $_GET['spectatorsNames'] ?? '';
  $vote           = $_GET['vote'] ?? '';

  $spectatorsList = explode("\n", $spectatorsStr);

  $datetime = new DateTime($datetimeInput);
  $year = $datetime->format('Y');
  setlocale(LC_ALL, "fr_FR");
  $date = ucfirst(strftime("%A %d %B", $datetime->getTimestamp()));
  $time = strftime("%H h %M", $datetime->getTimestamp());

  if ($places < count($spectatorsList)) {
    $error = 'Attention : le nombre de billets édités est inférieur au nombre de spectateur-ices listé-es';
  }
}

include "inc/tickets.tpl.php";
