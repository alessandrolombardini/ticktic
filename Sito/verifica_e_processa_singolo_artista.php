<?php 
    require_once("./bootstrap.php");
    if(isset($_GET["id"]) && isset($_GET["valutazione"]) && $_SESSION["autorizzazione"]=="AMMINISTRATORE"){
        $dbh->aggiornaInformazioniArtista($_GET["id"], $_GET["valutazione"]);    
    } else {
        require_once("./page_not_found.php");
    }
    require_once("./template/base.php");
?>