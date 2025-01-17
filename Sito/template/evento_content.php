<div data-idevento="<?php echo $templateParams["informazioniEvento"]["IDEvento"] ?>" class="row contenitoreID mt-5 mb-5">
    <div class="col-0 col-md-1"></div>
    <div class="col-12 col-md-10">
        <div class="row mb-md-3 my-0 align-items-end">
            <p class="titolo_sezioni col-8 col-md-7 mt-2 mb-0">Evento</p>
        </div>
        <hr class="mt-1 mx-2 mb-5"/>
        <?php if(isset($templateParams["msg"])): ?>
            <div class="row">
                <p class="col-12 my-2 text-center align-center
                <?php if($templateParams["error"] == 's'){echo "error-msg";} else {echo "good-msg";}?>"><?php echo $templateParams["msg"]?></p>
            </div>
        <?php endif ?>
        <div class="roundend-corners bg-white border mt-2 mb-4 p-md-3 mr-0 shadow-sm concert-tickets p-0 m-0">
            <div class="row mb-3 mt-3 text-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 pb-3 px-2 d-inline text-center">
                    <img style="width: 100%; float:left; " class="img-fluid rounded px-0" src="./images/eventi/<?php echo $templateParams["informazioniEvento"]["ImmagineEvento"] ?>" alt="immagine evento"/>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div>
                        <p class="titolo_sezioni"><?php echo $templateParams["informazioniEvento"]["NomeEvento"] ?></p>
                        <?php if (isset($templateParams["artisti"]) && count($templateParams["artisti"])>0 ): ?>
                            <p>Artisti: <?php foreach($templateParams["artisti"] as $artista){ echo '<a class="purple-black-link" href="./artista.php?IDArtista='.$artista["IDArtista"].'">'.$artista["PseudonimoArtista"].'</a>'; } ?></p>
                        <?php endif ?>
                        <p><?php echo $templateParams["informazioniEvento"]["DescrizioneEvento"] ?></p>
                        <p class="font-italic"><?php echo $templateParams["informazioniEvento"]["Luogo"] ?></p>
                        <p class="font-italic"><?php echo date("d/m/Y H:m", strtotime(substr($templateParams["informazioniEvento"]["DataEvento"], 0, -3)));?></p>
                        <?php if(isset($templateParams["informazioniEvento"]["NoteEvento"]) && $templateParams["informazioniEvento"]["NoteEvento"] != ""): ?>
                            <p><small>Note: <?php echo $templateParams["informazioniEvento"]["NoteEvento"]?></small></p>
                        <?php endif ?>
                        <p class="font-italic">Categoria evento: <a class="purple-black-link" href="./categoria.php?IDCategoria=<?php echo $templateParams["informazioniEvento"]["IDCategoria"]?>"><?php echo $templateParams["informazioniEvento"]["NomeCategoria"]?></a></p>
                    </div>
                </div>
            </div>
            <?php if(!isset($templateParams["msg"])): ?>
                <div>
                    <hr />
                    <div class="row mt-3">
                        <p class="col-3 text-center"> Biglietto </p>
                        <p class="col-2 col-md-4 text-right"> cad.</p>
                        <p class="col-2 col-md-2 text-left p-0 ticket-p">€ <?php echo $templateParams["informazioniEvento"]["PrezzoBiglietto"] ?></p>
                        <span class="col-2 col-md-1 menoEvento fas fa-minus-circle fa-2x text-right  m-0 px-0 pb-0 cursor-pointer"></span>
                        <p class="col-1 text-center chill font-mediumlittle tickets-num p-0 m-0">1</p>
                        <span class="col-2 col-md-1 piuEvento fas fa-plus-circle fa-2x pl-0 text-left  m-0 px-0 pb-0 cursor-pointer"></span>
                        <div class="col-0 col-sm-1"></div>
                    </div>
                    <hr />
                    <div class="row mb-3">
                        <p class="col-9 col-md-10 text-right pr-4 font-weight-bold"> Totale parziale </p>
                        <p class="col-1 col-md-1 text-right  p-0 font-weight-bold totale-e"></p>
                        <div class="col-2 col-md-1"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-12">
                            <div class="row d-none avviso-acquisto-evento" data-loggato="<?php if(isset($_SESSION["id"])) { if($_SESSION["autorizzazione"] == "UTENTE") {echo "u";} else {echo "o";}} else {echo "n";} ?>">
                                <p class="col-12 my-2 text-center align-center good-msg">Biglietto aggiunto al carrello</p>
                            </div>
                            <div class="row d-none avviso-acquisto-evento-gestore">
                                <p class="col-12 my-2 text-center align-center error-msg">Solo gli utenti possono effettuare acquisti</p>
                            </div>
                            <div class=" text-center row">
                            <?php if(isset($_SESSION["id"])): ?>
                                <a href="./evento.php?IDEvento=<?php echo $templateParams["informazioniEvento"]["IDEvento"]?>" class="purple-btn col-10 shadow-sm p-3 mx-auto mt-4 rounded-pill btn_aggiungi_al_carrello" id="declinaBtn">Aggiungi al carrello</a>
                            <?php else: ?>
                                <a href="./login.php" class="purple-btn col-10 shadow-sm p-3 mx-auto mt-4 rounded-pill btn_aggiungi_al_carrello">Aggiungi al carrello</a>
                            <?php endif ?>   
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="col-0 col-md-1"></div>
</div>
