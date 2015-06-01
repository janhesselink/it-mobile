<?php
require_once('/controller/article.php');

$articles = getAllArticles();
?>

    <h1>Dit is de artikel pagina</h1>


<?php
foreach($articles as $article) {
    echo $article->name;
}
?>