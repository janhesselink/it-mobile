<?php
    /* VOEG DE CONTROLLER PAGINA TOE
     * Hierin staat alle logica dat
     * wordt gebruikt door deze view
    */
    require_once('/controller/reclame.php');
?>
<script>
    // LAAD EEN CSS OF JS BESTAND SPECIFIEK VOOR JOUW PAGINA
    loadCSS('reclame.css');
    loadJS('reclame.js');
</script>


<h1>Dit is de reclame pagina</h1>

<?php
    echo toonReclame($_GET['id']);
?>

<div id="blokje"></div>
<button class="btn btn-primary" onclick="toonKleur()">Maak blauw</button>

<p>
    <a href="index.php?page=reclame/index&id=2" class="btn btn-link">Toon reclame 2</a>
    <br>
    <a href="index.php?page=reclame/create" class="btn btn-link">Maak een nieuwe reclame</a>
    <br>
    <a href="index.php" class="btn btn-link">Ga terug</a>
</p>