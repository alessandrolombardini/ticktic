<div class="row">
    <div class="col-0 col-md-1"></div>
    <div class="col-12 col-md-10">
        <div class="row mb-md-3 mb-0 mt-5">
            <p class="titolo_sezioni col-8 col-md-7 mt-2 mb-0">Ordini</p>
            <a class="col-md-5 col-4 text-right pt-3 cursor-pointer purple-black-link font-weight-bold" href="javascript:history.back()"> Indietro </a>
        </div>
        <hr class="mt-1 mx-2"/>
        <?php if (count($templateParams["ordini"]) == 0):?>
            <div class="row error-template">
                <div class="col-1 col-md-2"></div>
                <div class="roundend-corners col-10 col-md-8 bg-white border mt-2 mb-4 px-4 py-3 mr-0 ">
                    <div class="error-template text-center">
                        <p class="h5 pt-4">Non ci sono ordini</p>
                    </div>
                </div>
                <div class="col-1 col-md-2"></div>
            </div>
        <?php endif ?>
    <div class="col-0 col-md-1"></div>

    <?php foreach ($templateParams["ordini"] as $ordine): ?>
    <div class="row mt-2">
        <div class="roundend-corners col-12 col-md-12 bg-white border mt-2 mb-5 px-4 py-3 shadow-sm">
            <div class="row mb-0 mt-0">
                <div class="pl-3 pt-1 text-md-left text-md-big text-center color-purple col-md-8">
                    <h4 class="pb-0 mb-0"> Ordine del <?php echo date("d/m/Y", strtotime($ordine["DataOrdine"]));?> </h4>
                </div>
            </div>
            <hr/>
            <?php foreach ($templateParams["eventiinordine"][$ordine["IDOrdine"]] as $evento): ?>
            <div class="container px-0">
                <div class="row mb-0 mt-3 align-items-end">
                    <img alt="" class="col-md-4 mt-1 mt-md-0 col-12 mb-3 mb-md-0 px-0 px-md-2 rounded-corners" src="./images/eventi/<?php echo $evento["ImmagineEvento"];?>"/>
                    <div class="col-md-8 mt-md-0 col-12 px-0">
                        <div class="row mb-0">
                            <h5 class="col-12 text-md-left text-center mb-3 px-0 px-0 px-md-2"> <?php echo $evento["NomeEvento"];?> </h5>
                            <h6 class="col-12 text-left mb-1 px-0 px-md-2"><?php foreach ($templateParams["artistiinevento"][$evento["IDEvento"]] as $artista){
                                $str = $artista["PseudonimoArtista"];
                                if ($artista["IDArtista"] != end($templateParams["artistiinevento"][$evento["IDEvento"]])["IDArtista"]){
                                    $str.=" - ";
                                }
                                echo $str;
                            }?></h6>
                            <p class="col-12 event-info text-left mb-0 px-0 px-0 px-md-2"><?php echo $evento["Luogo"];?></p>
                        </div>
                        <div class="row mb-0 mt-md-1 align-items-end">
                            <div class="col-md-6 text-md-left text-left mt-md-0 mb-0 col-12 mt-1 px-0 px-0 px-md-2">
                                <p class="mb-0"><?php echo date("d/m/Y H:m", strtotime(substr($evento["DataEvento"], 0, -3)));?></p>
                            </div>
                            <div class="col-md-3 text-md-right align-text-bottom text-left mt-md-1 mb-0 col-6 mt-3 px-0 px-0 px-md-2">
                                <h6 class="mb-0"><?php echo $evento["NumeroBiglietti"];
                                if ($evento["NumeroBiglietti"] >1){
                                    echo " biglietti";
                                } else {
                                    echo " biglietto";
                                }?></h6>
                            </div>
                            <div class="col-md-3 text-md-right text-right align-text-bottom mt-md-0 mb-0 col-6 mt-3 px-0 px-md-2">
                                <h5 class="mb-0">€ <?php echo $evento["SpesaBiglietti"];?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <?php endforeach ?>
            <div class="row mb-0 mt-0">
                <div class="col-12 col-md-7 text-right text-md-left mb-0 mt-1 pr-md-3">
                    <p class= "mb-0 pl-md-3"> Spedizione € <?php echo $ordine["Spedizione"];?> </p>
                </div>
                <div class="col-12 col-md-5 text-right mb-0 pr-md-3 color-purple">
                    <h4>€ <?php echo $ordine["TotaleSpesa"];?> </h4>
                </div>
            </div>
        </div>
    
    </div>
    <?php endforeach ?>
    </div>
</div>
