<?php
session_start();

//Weryfikacja statusu gracza.
if (isset($_SESSION["gra"])) {
  //Zalogowany gracz.
  $prefiks = "zg_";
  $informacja = "wylogowanie";
} else {
  $prefiks = "nz_";
  $informacja = "nz_logowanie";
}

function powitanie() {
  global $prefiks;
  if (strcmp($prefiks, "nz_")) {
        return "powitanie";
      } else {
        return "pojedynek";
      }
}

//Sprawzenie, czy wybrano opcję z MENU:
if (isset($_GET["o"])) {
  //Wybrano opcję z MENU.
  switch ($_GET["o"]) {
    default:
      $zawartosc = powitanie();
  }
} else {
  //Sprawdzenie czy wybrano akcję z formularza:
  if (isset($_POST["akcja"])) {
    //Wybrano akcję z formularza.
    switch ($_POST["akcja"]) {
      default:
        $zawartosc = powitanie();
    }
  } else {
    $zawartosc = powitanie();
  }
}

//Wywołanie kodu strony:
include("inkludy/strona.php");
?>