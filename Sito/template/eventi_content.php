<div class="row my-5">
    <div class="col-0 col-md-1"></div>
        <div class="col-12 col-md-10 p-0 m-0">

            <div class="row mb-0">
                <div class="col-8 col-md-7 row mb-0">
                    <p class="titolo_sezioni d-inline mr-3">Eventi</p>
                    <p class="text-black-50 pt-2 mb-0">(<?php echo count($templateParams["eventi"]) ?> risultati)</p>
                </div>
            </div>
            <hr class="mt-0"/>

<div class="form-group">
            <form class="mx-auto text-center"  action="/action_page.php">
                <label for="order-selection" class="ml-3 d-inline-block">Ordina la visualizzazione:</label>
                
                <select id="order-selection" class="d-inline-block rounded-pill mx-3">
                    <!-- <optgroup label="Ordina per Nome Evento"> -->
                        <option value="A-Z">Ordinamento A-Z</option>
                        <option value="Z-A">Ordinamento Z-A</option>
                    <!-- </optgroup> -->
                    <!-- <optgroup label="Ordina per Prezzo Evento"> -->
                        <option value="P-ASC">Prezzo crescente</option>
                        <option value="P-DESC">Prezzo decrescente</option>
                    <!-- </optgroup> -->
                </select>
            </form>
</div>



            <div class="row" id="event-container">
                <?php foreach ($templateParams["eventi"] as $evento) :?>
                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 p-2 ml-0 mt-1 mb-2">
                        <div class="shadow-sm bg-white roundend-corners border-dark d-inline-block p-2">
                            <div class="col-12 m-0 p-0 float-left shadow-sm  bg-white roundend-corners border-dark">
                                <img class="img-fluid roundend-corners" alt="immagine evento" src="images/eventi/<?php echo $evento["ImmagineEvento"];?>"/>
                            </div>
                            <div class="col-12 d-inline-block text-left ml-3 mt-2 mb-2">
                                <h5 class="mb-0"><?php echo $evento["NomeEvento"];?></h5>
                                <p class="date font-italic m-0 p-0 mt-1"> <?php echo date("d/m/Y H:m", strtotime(substr($evento["DataEvento"], 0, -3)));?></p>
                                <p class="m-0 p-0 font-description"><?php echo $evento["Luogo"];?> </p>
                            </div> 
                            <div class="col-12 m-0 mb-2">
                            <?php if(isset($_SESSION["id"]) && ($_SESSION ["autorizzazione"] == "ORGANIZZATORE" || $_SESSION ["autorizzazione"] == "AMMINISTRATORE")): ?>
                            <div class="invisible" data-IDEvento="<?php echo $evento["IDEvento"]?>"><span class="cuore-pieno text-dark mx-3 fas fa-heart fa-2x"></span></div>
                            <?php else: ?>
                            <div  data-IDEvento="<?php echo $evento["IDEvento"]?>"><span class="cuore-pieno cursor-pointer text-dark mx-3 fas fa-heart fa-2x"></span></div>
                            <?php endif ?>
                                <a href="./evento.php?IDEvento=<?php echo $evento["IDEvento"]?>" class="scopri btn py-1 px-3 mx-3 shadow-sm purple-btn rounded-pill">Scopri</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            
        </div>
    <div class="col-0 col-md-1"></div>
</div>