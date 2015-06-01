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
        /*global $dbh;
        $stmt = $dbh->prepare("SELECT * FROM Article");
        $stmt->execute();
        $result = $stmt->fetch();
        */
        $articles = array();

        $result = array(
            array(
            'Id' => 0,
            'Name' => 'Test',
            'Price' => 12.50,
            'Brand' => 'HTC',
            'Model' => 'One m8'
            ),
            array(
                'Id' => 1,
                'Name' => 'Test',
                'Price' => 10,
                'Brand' => 'HTC',
                'Model' => 'One m7'
            ),
            array(
                'Id' => 2,
                'Name' => 'Test',
                'Price' => 100,
                'Brand' => 'HTC',
                'Model' => 'One m9'
            )
        );

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
    $article = new Article(array
    (
            'id' => $arr['Id'],
            'name' => $arr['Name'],
            'price' => $arr['Price'],
            'brand' => $arr['Brand'],
            'model' => $arr['Model']
    ));
    return $article;
}



?>