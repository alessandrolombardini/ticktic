<div class="row">
  <div class="col-0 col-md-1"></div>
  <div class="col-12 col-md-10">
  <div class="row mb-md-3 mb-0 mt-5 align-items-end">
          <p class="titolo_sezioni col-8 col-md-7 mt-2 mb-0">Artisti da valutare</p>
          <a class="col-md-5 col-4 text-right pt-3 cursor-pointer purple-black-link font-weight-bold" href="area_amministratore.php"> Annulla </a>
      </div>
      <hr class="mt-1 mx-2"/>
    <?php if (isset($templateParams["msg"]) && $templateParams["msg"]!= "0"):?>
        <p class="col-8 mb-3"> <?php echo $templateParams["msg"] ?> </p> 
    <?php endif?>
    <div class="row">
        <table class="table table-striped table-bordered">
          <thead>
            <tr class="d-flex">
              <th class="col-1" id="numeroInLista"></th>
              <th class="col-8" id="pseudonimo">Pseudonimo</th>
              <th class="col-3" id="linkAdArtista"></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            <?php foreach ($templateParams["artistiDaAnalizzare"] as $artista): ?>
              <tr class="d-flex">
                <th class="col-1" id="numero" headers="numeroInLista"><?php echo $i ?></th>
                <td class="col-8" headers="numero pseudonimo"><?php echo $artista["PseudonimoArtista"] ?></td>
                <td class="col-3 text-right" headers="numero linkAdArtista"><a href="./verifica_singolo_artista.php?id=<?php echo $artista["IDArtista"] ?>">Apri</a></td>
              </tr>  
            <?php $i++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
    </div>
  </div>
  <div class="col-0 col-md-1"></div>
</div>

