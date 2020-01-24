<div class="container mt-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-black pt-2 mb-4"> Area Gestore</h3>
            <?php if (isset($templateParams["msg"]) && $templateParams["msg"]!= "0"):?>
                <p class="col-10 float-left my-2 align-center"> <?php echo $templateParams["msg"] ?> </p> 
            <?php endif?>
            <form action="./inserisci_evento.php" method="GET">
                <button type="submit" class="btn btn-gestore col-12 py-3 mt-5 mb-2 ml-0" name="action" value="1">
                    <p class="col-10 float-left mb-0 mt-1 align-center"> Inserisci nuovo evento </p> 
                    <i class="fa fa-angle-right fa-2x"></i> 
                </button>
            </form>
            <form action="./inserisci_evento.php" method="GET">
                <button type="submit" class="btn btn-gestore col-12 py-3 mb-2 ml-0" name="action" value="2">
                    <p class="col-10 float-left mb-0 mt-1 align-center"> Modifica evento </p> 
                    <i class="fa fa-angle-right fa-2x"></i> 
                </button>
            </form>
                <button type="button" class="btn btn-gestore col-12 py-3 mb-2 ml-0">
                    <p class="col-10 float-left mb-0 mt-1 align-center"> Visualizza prossimi eventi </p> 
                    <i class="fa fa-angle-right fa-2x"></i> 
                </button>
            <button type="button" class="btn btn-gestore col-12 py-3 mt-5 mb-2 ml-0">
                <p class="col-10 float-left mb-0 mt-1 align-center"> Visualizza statistiche </p> 
                <i class="fa fa-angle-right fa-2x"></i> 
            </button>
            <button type="button" class="btn btn-gestore col-12 py-3 mb-10 ml-0">
                <p class="col-10 float-left mb-0 mt-1 align-center"> Storico eventi </p> 
                <i class="fa fa-angle-right fa-2x"></i> 
            </button>
        </div>
        <div class="col-1"></div>
    </div>
</div>