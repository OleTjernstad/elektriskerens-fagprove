<?php

session_start();


$title = 'Elektrikerens fagprøve';

$menu = '<li><a href="https://coord.info/GC6JJ5P">Cachen</a></li>';

$label = '';
date_default_timezone_set("Europe/Oslo ");
if($_SESSION['pass'] == 'ok')
{

$content = '<img src="images/bordv.png" class="top_fb_img">
<div class="fb_div_top"><h1 class="fbrev">Geocache -
Fagbrev</h1></div>

<div class="kand_top center"><h1 class="hand">' . $_SESSION['kandidat'] . '</h1></div><br><br>
<div class="tekst_fb" >Har den: <span class="hand">' . date("d F Y ") . '</span> <br><br>
Etter oppgavene gitt i GC6JJ5P<br>Bestått cachens krav for løsning,<br>
og innvilges herved koordinatene til finale boksen <br><br>

Med karakteren: <span class="hand" >Meget godt bestått</span >
<br><br> <br>

<span class="kord" >N60° 13.146\' E011° 38.160\'</span>

<br><br> <br><br>

Sensor har vurdert kandidaten til å ha den kunnskap og ferdighet <br>
som kreves for å logge geocachen, <br><br><span class="hand" >God tur</span></div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<img src="images/bordvb.png" class="bottom_fb_img">
';
}
else {
    $content = '<div class="fbrev" >Beklager ingen snarveier her</div>';
}



include 'template/Template_fb.php';
?>

