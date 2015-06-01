<?php
require_once('/controller/article.php');

$articles = getAllArticles();
?>

    <h1>Dit is de artikel pagina</h1>


<?php

foreach($articles as $article) {
    echo 'Id: '.$article->id.'<br>';
    echo 'Naam: '.$article->name.'<br>';
    echo 'Prijs: '.$article->price.'<br>';
    echo 'Merk: '.$article->brand.'<br>';
    echo 'Model: '.$article->model.'<br>';
    echo '<br>';
}
?>