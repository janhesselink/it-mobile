<?php
    
function toonReclame($id)
{
    $texten = array(
        'Koop nu alles voor de helft van de prijs!',
        'Bij aankoop van 2 artikelen 1 artikel gratis!',
        'Nog meer fantastiche aanbieden!'
    );

    return $texten[$id];
}

function querySelectVoorbeeld()
{
    global $dbh;
    $stmt = $dbh->prepare("SELECT * FROM Tabel");
    $stmt->execute();  
    
    return $stmt->fetchAll();
}

?>