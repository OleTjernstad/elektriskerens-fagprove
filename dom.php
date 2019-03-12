<?php
session_start();
require ("fasit.php");
$_SESSION['kandidat'] = $_POST["Kandidat"];



if($_POST["P1"] == $svar1)
{
    $sensor++;
}
if(floatval(str_replace(",", ".",$_POST['P2'])) == $svar2a)
{
    $sensor++;
}
if(floatval(str_replace(",", ".",$_POST['P22'])) == $svar2b)
{
    $sensor++;
}
if($_POST["P3"] == $svar3)
{
    $sensor++;
}
if(floatval(str_replace(",", ".",$_POST['P4']))  == $svar4)
{
    $sensor++;
}
if($_POST["P5"] == $svar5)
{
    $sensor++;
}
$title = 'Elektrikerens fagprøve';

$menu = '<li><a href="https://coord.info/GC6JJ5P">Cachen</a></li>
        <li><a href="index.php">Tilbake</a></li>';

$label = '<span class="label label-info ">' . $_POST["Kandidat"] . '</span>';
 echo $sensor;
if($sensor < 6)
{
  $content = '<div class="alert alert-danger">
  <strong>IKKE BESTÅTT</strong> Beklager men det er en eller flere feil i din besvarelse, og du får derfor ikke bestått i denne omgangen, prøv igjen<br><br>
  Har du behov for litt hjelp kontakt CO på olet@glaamadalen.no </div>';
}

else if($sensor == 6)
{
    $_SESSION['pass'] = 'ok';
  $content = '<div class="alert alert-success">
  <strong>BESTÅTT</strong> Gratulerer du har nå bestått cachen. Og du kan kalle deg for geocache-trikker.<br> For å hente ditt fagbrev følg denne linken: <a href="http://olet.no/GC6JJ5P/fbrev.php">Fagbrev</a> </div>';
}



    include 'template/Template.php';