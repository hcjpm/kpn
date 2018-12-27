<?php
session_start();

//Weryfikacja statusu gracza.
if (isset($_SESSION["gra"])) {
  //Zalogowany gracz.
  $prefiks = "zg_";
  $informacja = "wylogowanie";
  $zawartosc = "pojedynek";
} else {
  $prefiks = "nz_";
  $informacja = "nz_logowanie";
  $zawartosc = "powitanie";
}

//Sprawzenie, czy wybrano opcję z MENU:
if (isset($_GET["o"])) {
  //Wybrano opcję z MENU.
  switch ($_GET["o"]) {
    default:
      //
  }
} else {
  //Sprawdzenie czy wybrano akcję z formularza:
  if (isset($_POST["akcja"])) {
    //Wybrano akcję z formularza.
    switch ($_POST["akcja"]) {
      default:
        //
    }
  }
}

//Wywołanie kodu strony:
include("inkludy/strona.php");
?>