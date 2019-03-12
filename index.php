<?php
$title = 'Elektrikerens fagprøve';

$menu = '<li><a href="https://coord.info/GC6JJ5P">Cachen</a></li>';

$label = '';

$content = '<div class="panel panel-default">
    <div class="panel-body">

    Her kan du avgi din besvarelse fra cachen "Elektrikerens fagprøve"


            <form id="Prove" name="Avsigelse" method="post" action="dom.php" >
            <div class="form-group">
            <label for="Kandidat">Geocaching nick</label>
            <input id="Kandidat" name="Kandidat" class="form-control" type="text" placeholder="Geocaching nick">
            </div>
            <div class="form-group">
            <label for="P1">Antall meter kabel</label>
            <input id="P1" name="P1" class="form-control" type="text" placeholder="Meter">
            </div>
            <div class="form-group">
            <label for="P2">Totalt kabelbehov</label>
            <input id="P2" name="P2" class="form-control" type="text" placeholder="Meter">
            </div>
            <label for="P2">Manglende antall meter kabel</label>
            <input id="P22" name="P22" class="form-control" type="text" placeholder="Meter">
            </div>
            <div class="form-group">
            <label for="P3">Kabeltverrsnitt</label>
            <input id="P3" name="P3" class="form-control" type="text" placeholder="kvadrat(mm&sup2;)">
            </div>
            <div class="form-group">
            <label for="P4">Hvor mange Ampere</label>
            <input id="P4" name="P4" class="form-control" type="text" placeholder="Ampere (A)">
            </div>
            <div class="form-group">
            <label for="P5">Hvilket alternativ</label>
                <div class="radio">
                    <label><input  id="P5A" name="P5" type="radio" value="A" >A</label>
                </div>
                <div class="radio">
                    <label><input  id="P5B" name="P5" type="radio" value="B">B</label>
                </div>
                <div class="radio">
                    <label><input  id="P5C" name="P5" type="radio" value="C">C</label>
                </div>
                <div class="radio">
                    <label><input  id="P5D" name="P5" type="radio" value="D">D</label>
                </div>
                <div class="radio">
                    <label><input  id="P5E" name="P5" type="radio" value="E">E</label>
                </div>

                </div>
                <div class="form-group">

                <input id="send" name="send" type="submit" class="btn btn-success" value="Avgi besvarelse">
                 </div>
                    <div class="form-group">

            </form>


            </div>
</div>';



include 'template/Template.php';
?>

