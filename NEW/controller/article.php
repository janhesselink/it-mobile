<?php
/* ARTICLE CLASS */
class Article
{
    public $id, $name, $price, $brand, $model;
    public $specs = array(); //TODO: WEL OF NIET NODIG?!

    /* Id, Name, Details, Price, Brand, Model */
    function __construct($parameters = array()) {
        foreach($parameters as $key => $value) {
            $this->$key = $value;
        }
    }
}

/* GET ALL ARTICLES, ARRAY OF ARTICLE OBJECTS */
function getAllArticles() {
    try
    {
        global $dbh;
        $stmt = $dbh->prepare("SELECT * FROM Article");
        $stmt->execute();
        $result = $stmt->fetch();

        $articles = array();
        foreach($result as $article)
        {
            $articles[] = arrayToArticle($article);
        }

        return $articles;
    }
    catch(Exception $e)
    {
        return false;
    }
}

/* CONVERT ARRAY FROM DATABASE TO ARTICLE OBJECT */
function arrayToArticle($arr) {
    $article = new Article(
        [
            $id->$arr['Id'],
            $name->$arr['Name'],
            $price->$arr['Price'],
            $brand->$arr['Brand'],
            $model->$arr['Model']
        ]);
    return $article;
}



?>