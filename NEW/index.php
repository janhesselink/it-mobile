<?php
    // LOAD CONFIG FILE
    require_once("/config.php");

    /* MOGELIJKE PAGINA VARIABELEN
     * PHP: $_GET['page'] = De pagina die wordt getoond (LET OP: ZONDER .PHP)
     * JS:  loadCSS('naam.css') = Laad een pagina specifiek CSS bestand
     * JS:  loadJS('naam.js') = Laad een pagina specifiek JS bestand
     */
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <!-- TOON PAGINA TITLE -->
        <title>iT-Mobile</title>

        <!-- 3RD PARTY CSS LIB -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  <!-- TODO: local copy gebruiken -->

        <!-- 3RD PARTY JS LIBS -->
        <script type="text/javascript" src="vendor/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> <!-- TODO: local copy gebruiken -->

        <!-- EIGEN JS FILES (ALLEEN VOOR JS WAT OVERAL NODIG IS!) -->
        <script type="text/javascript" src="js/functions.js"></script>
    </head>
    <body>

        <!-- LOAD HEADER -->
        <?php require_once('view/header.php'); ?>

        <!-- CONTENT VAN PAGINA -->
        <div id="content">
            <?php
            if(isset($_GET['page'])) {
                require_once('view/'.$_GET['page'].'.php');
            }
            else {
                require_once('view/home.php');
            }
            ?>
        </div>

        <!-- LOAD FOOTER -->
        <?php require_once('view/footer.php'); ?>      
               
    </body>
</html>
