<!-- Testata del sito -->
<div id="homepage-image" class="position-relative m-0 p-0"> 
      <p class="title text-light text-center pt-5">Benvenuti su ticktic! </h1>
      <p class="subtitle text-light text-center">Il miglior portale di ricerca e acquisto di eventi!</p>
      <!-- Search form -->
      <div class="row mt-10">
        <div class="col-lg-3"></div>
        <div class="col-12 col-lg-6 mt-3 mt-md-5 mt-xl-10">
          <form class="search-box mx-3 my-5" method="POST" action="./ricerca.php">
            <label for="search-bar" class="hide"> Search</label>
            <input id="search-bar" class="form-control rounded-pill search-input text-center" type="search" name="barraDiRicerca" placeholder="Cerca per Eventi, Artisti, Luoghi, ..." aria-label="Search" />
          </form>
        </div>
        <div class="col-lg-3"></div>
      </div>
    
</div>

<!-- Eventi Suggeriti -->
<div class="container-fluid mt-2">
  <p class="titolo_sezioni d-inline mr-3">Suggeriti per te</p>
  <div class=" mb-3 mt-1 dropdown-divider w-50 font-weight-bold"></div>
</div>

<div class="slideshow row">
  <?php foreach ($templateParams["eventi_suggeriti"] as $evento) :?>
    <div class="row p-3">
      <div class="roundend-corners border p-2">
        <div class="col-12 m-0 p-0 float-left shadow-sm  bg-white roundend-corners border-dark">
            <img class="img-fluid roundend-corners" src="images/eventi/<?php echo $evento["ImmagineEvento"];?>" alt="immagine evento"/>
        </div>
        <div class="col-12 m-0 p-0 d-inline-block text-left pl-3 pb-3 pt-3">
            <h5 class="mb-0"><?php echo $evento["NomeEvento"];?></h5>
            <p class="date font-italic m-0 p-0 mt-1"> <?php echo date("d/m/Y H:m", strtotime(substr($evento["DataEvento"], 0, -3)));?></p>
            <p class="m-0 p-0 font-description"><?php echo $evento["Luogo"];?> </p>
        </div> 
        <div class="col-12 m-0 p-0">
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

<!-- Prossimi Eventi -->
<div class="container-fluid mt-2">
  <p class=" titolo_sezioni d-inline mr-3">Prossimi Eventi</p>
  <div class=" mb-3 mt-1 dropdown-divider w-50 font-weight-bold"></div>
</div>

<div class="slideshow row">
  <?php foreach ($templateParams["eventi_prossimi"] as $evento) :?>
    <div class="row p-3">
      <div class="roundend-corners border p-2">
        <div class="col-12 m-0 p-0 float-left shadow-sm  bg-white roundend-corners border-dark">
            <img class="img-fluid roundend-corners" src="images/eventi/<?php echo $evento["ImmagineEvento"];?>" alt="immagine evento"/>
        </div>
        <div class="col-12 m-0 p-0 d-inline-block text-left pl-3 pb-3 pt-3">
            <h5 class="mb-0"><?php echo $evento["NomeEvento"];?></h5>
            <p class="date font-italic m-0 p-0 mt-1"> <?php echo date("d/m/Y H:m", strtotime(substr($evento["DataEvento"], 0, -3)));?></p>
            <p class="m-0 p-0 font-description"><?php echo $evento["Luogo"];?> </p>
        </div> 
        <div class="col-12 m-0 p-0">
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

<!-- Eventi Lista desideri-->
<?php if (isset($templateParams["eventi_desiderati"]) && $templateParams["eventi_desiderati"] != NULL): ?>
  <div class="container-fluid mt-2">
    <p class="titolo_sezioni d-inline mr-3">Dalla tua lista desideri</p>
    <div class=" mb-3 mt-1 dropdown-divider w-50 font-weight-bold"></div>
  </div>
  <div class="slideshow row">
    <?php foreach ($templateParams["eventi_desiderati"] as $evento) :?>
      <div class="row p-3">
        <div class="roundend-corners border p-2">
          <div class="col-12 m-0 p-0 float-left shadow-sm  bg-white roundend-corners border-dark">
              <img class="img-fluid roundend-corners" src="images/eventi/<?php echo $evento["ImmagineEvento"];?>" alt="immagine evento"/>
          </div>
          <div class="col-12 m-0 p-0 d-inline-block text-left pl-3 pb-3 pt-3">
              <h5 class="mb-0"><?php echo $evento["NomeEvento"];?></h5>
              <p class="date font-italic m-0 p-0 mt-1"> <?php echo date("d/m/Y H:m", strtotime(substr($evento["DataEvento"], 0, -3)));?></p>
              <p class="m-0 p-0 font-description"><?php echo $evento["Luogo"];?> </p>
          </div> 
          <div class="col-12 m-0 p-0">
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
<?php endif ?>

<!-- Eventi Acquistati -->
<?php if (isset($templateParams["eventi_acquistati"]) && $templateParams["eventi_acquistati"] != NULL): ?>
  <div class="container-fluid mt-2">
    <p class="titolo_sezioni d-inline mr-3">I tuoi eventi Acquistati</p>
    <div class=" mb-3 mt-1 dropdown-divider w-50 font-weight-bold"></div>
  </div>

  <div class="slideshow row">
    <?php foreach ($templateParams["eventi_acquistati"] as $evento) :?>
      <div class="row p-3">
        <div class="roundend-corners border p-2">
          <div class="col-12 m-0 p-0 float-left shadow-sm  bg-white roundend-corners border-dark">
              <img class="img-fluid roundend-corners" src="images/eventi/<?php echo $evento["ImmagineEvento"];?>" alt="immagine evento"/>
          </div>
          <div class="col-12 m-0 p-0 d-inline-block text-left pl-3 pb-3 pt-3">
              <h5 class="mb-0"><?php echo $evento["NomeEvento"];?></h5>
              <p class="date font-italic m-0 p-0 mt-1"> <?php echo date("d/m/Y H:m", strtotime(substr($evento["DataEvento"], 0, -3)));?></p>
              <p class="m-0 p-0 font-description"><?php echo $evento["Luogo"];?> </p>
          </div> 
          <div class="col-12 m-0 p-0">
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
<?php endif ?>

<!-- Categorie -->
<div class="container-fluid mt-2 mb-3">
  <p class="titolo_sezioni d-inline mr-3">Categorie</p>
  <div class=" mb-3 mt-1 dropdown-divider w-50 font-weight-bold"></div>
</div>
<div class="row">

  <?php foreach($templateParams["rand_categories"] as $categoria):?>
    <div class="col-6 col-md-4 col-xl-2">
      <div class="m-3">
        <a href="./categoria.php?IDCategoria=<?php echo $categoria["IDCategoria"]?>">
          <img class="img-fluid roundend-corners" src="./images/categorie/<?php echo $categoria["ImmagineCategoria"] ?>" alt="<?php echo getAltFromImageName($categoria["ImmagineCategoria"]) ?>" />
        </a>
      </div>
    </div>
  <?php endforeach ?>

</div>