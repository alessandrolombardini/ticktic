<?php
    require_once("./bootstrap.php");
    $templateParams["page_content"] = "./template/categoria_content.php";
    if(isset($_GET["IDCategoria"]) && !empty($_GET["IDCategoria"])){
        $templateParams["categoria"] = $dbh->getCategoryName($_GET["IDCategoria"])[0]["NomeCategoria"];
        $templateParams["eventi"] = $dbh->getEventsFromIDCategoriaNameOrdered($_GET["IDCategoria"], "ASC");
        $templateParams["page_content"] = "./template/categoria_content.php";
    } else {
        header('Location: ./page_something_goes_wrong.php');
    }
    require_once("./template/base.php");
?>