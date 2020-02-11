<div class="row mt-3">
    <div class="col-1 col-md-2"></div>
    <div class="col-10 col-md-8 p-0 m-0">
        <div class="row mb-3 mt-5 ">
            <h3 class="col-8 col-md-7">Informazioni</h3>
            <a class="col-md-5 col-4 text-right pt-3 cursor-pointer purple-black-link font-weight-bold" href="javascript:history.back()"> Indietro </a>
        </div>
        <hr/>
    <div class="col-1 col-md-2"></div>

    <div class="row mt-2">
        <div class="roundend-corners col-12 col-md-12 bg-white border mt-2 mb-5 px-4 py-3 shadow-sm">
            <div class="row pt-3">
                <div class = "col-12 col-md-4"><span class="font-weight-bold">Nome:  </span><?php echo$templateParams["account"]["Nome"]?></div>
                <div class = "col-12 col-md-4 mt-0 mt-md-1"><span class="font-weight-bold">Cognome:  </span><?php echo$templateParams["account"]["Cognome"]?></div>
                <div class = "col-12 col-md-4 mt-0 mt-md-1"><span class="font-weight-bold">Email:  </span><?php echo$templateParams["account"]["Email"]?></div>
            </div>
            <?php if ($_SESSION["autorizzazione"] != "AMMINISRATORE"):?>
                <div class="row mt-1 mt-md-2">
                    <div class = "col-12 col-md-4"><span class="font-weight-bold">Sesso:  </span><?php if ($templateParams["account"]["Sesso"] == 'm') {echo "maschile";} else if ($templateParams["account"]["Sesso"] == 'f'){echo"femminile";} else {echo "altro";}?></div>
                    <div class = "col-12 col-md-4 mt-0 mt-md-1"><span class="font-weight-bold">Data di nascita:  </span><?php echo date("d/m/Y", strtotime($templateParams["account"]["DataNascita"]))?></div>
                    <?php if ($_SESSION["autorizzazione"] == "ORGANIZZATORE"):?>
                        <div class = "col-12 col-md-4 mt-0 mt-md-1"><span class="font-weight-bold">IBAN:  </span><?php echo$templateParams["account"]["IBAN"]?></div>
                    <?php endif ?>
                </div>
                <div class="row mt-1 mt-md-2 pb-3">
                    <div class = "col-12 col-md-7"><span class="font-weight-bold">Indirizzo:  </span><?php echo$templateParams["account"]["Indirizzo"]?></div>
                    <div class = "col-8 col-md-3 mt-0 mt-md-1"><span class="font-weight-bold">Città:  </span><?php echo$templateParams["account"]["Citta"]?></div>
                    <div class = "col-4 col-md-2 mt-0 mt-md-1"><span class="font-weight-bold">CAP:  </span><?php echo$templateParams["account"]["CAP"]?></div>
                </div>
            <?php endif ?>
            <div class="row mt-1 mt-md-2 pb-1">
                <a class="col-12 text-right" href="#">
                    <button class="purple-btn p-1 mt-2 pr-4 pl-4 font-description shadow-sm rounded-pill">Modifica Informazioni</button>
                </a>
            </div>
        </div>
    </div>
</div>