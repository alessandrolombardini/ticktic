<div class="row">
  <div class="col-0  col-md-1"></div>
  <div class="col-12  col-md-10">
    <div class="row mb-md-3 mb-0 mt-md-5 mt-4">
        <p class="titolo_sezioni col-8 col-md-7 mt-2 mb-0">Registrazione</p>
        <a class="col-md-5 col-4 text-right pt-3 cursor-pointer purple-black-link font-weight-bold" href="login.php"> Annulla </a>
    </div>
    <hr class="mt-1 mx-2"/>
    <?php if (isset($templateParams["msg"]) && $templateParams["msg"]!= "0"):?>
      <div class="row">
          <p class="col-12 my-2
          <?php if($templateParams["error"] == 's'){echo "error-msg";} else {echo "good-msg";}?>"><?php echo $templateParams["msg"]?></p>
      </div>
    <?php endif?>
    <div class="container">
      <form action="./processa_registrazione.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome">Nome *</label>
            <input type="text" class="form-control" id="nome" name="nome" required/>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cognome">Cognome *</label>
            <input type="text" class="form-control" id="cognome" name="cognome" required/>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <label for="email">Email *</label>
          <input type="email" class="form-control" name="email" id="email" required/>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="indirizzo">Indirizzo *</label>
            <input type="text" class="form-control" id="indirizzo"  name="indirizzo" required/>
          </div>
          <div class="col-md-6 mb-3">
            <label for="data">Data di nascita *</label>
            <input type="date" class="form-control" name="data" id="data" required/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="citta">Città *</label>
            <input type="text" maxlength="40" class="form-control" id="citta" name="citta" required/>
          </div>
          <div class="col-md-6 mb-3">
            <label for="CAP">CAP *</label>
            <input type="number" max="99999" class="form-control" id="CAP" name="CAP" required/>
          </div>
        </div>
        <div class="d-block col-md-12 my-3">
        <fieldset>
            <legend>Sesso*</legend>
          <div class="custom-control custom-radio">
            <input id="sessoMaschio" name="sesso" type="radio" value="m" class="custom-control-input" checked required/>
            <label class="custom-control-label" for="sessoMaschio">Maschio</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="sessoFemmina" name="sesso" type="radio" value="f" class="custom-control-input" required/>
            <label class="custom-control-label" for="sessoFemmina">Femmina</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="sessoAltro" name="sesso" type="radio" value="a" class="custom-control-input" required/>
            <label class="custom-control-label" for="sessoAltro">Altro</label>
          </div>
        </fieldset>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="password">Password *</label>
            <input type="password" maxlength="50" class="form-control" id="password" name="password" required/>
          </div>
          <div class="col-md-6 mb-3">
            <label for="ripetipassword">Ripeti password *</label>
            <input type="password" maxlength="50" class="form-control" id="ripetipassword" name="ripetipassword" required/>
          </div>
        </div>
        <div class="mb-3 col-md-12">
          <label for="gestore"><input type="checkbox" name="gestore" id="gestore"/> Richiedi abilitazione come gestore</label>
        </div>
        <div class="areagestore mb-3 col-md-12">
          <label for="iban">IBAN</label>
          <input type="text" class="form-control" id="iban" name="iban"/>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-md-3 col-1"></div>
            <input class="purple-btn rounded-pill px-5 py-2 text-center col-md-6 col-10" value="Registrati" type="submit"/>
            <div class="col-md-3 col-1"></div>
        </div>
      </form>
    </div>
  </div>
  <div class="col-0 col-md-1"></div>
</div>
