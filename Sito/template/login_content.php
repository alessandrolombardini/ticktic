<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-2 col-xl-4"></div>
    <div class="col-12 col-lg-6 col-md-6 col-sm-8 col-xl-4">
        <?php if(isset($templateParams["msg"])): ?>
            <div class="row">
                <p class="col-12 my-2 text-center align-center
                <?php if($templateParams["error"] == 's'){echo "error-msg";} else {echo "good-msg";}?>"><?php echo $templateParams["msg"]?></p>
            </div>
        <?php endif ?>
        <div class="bg-white border mt-4 mb-4 px-5 py-4">
            <div class="form-group text-center">
                <img class="img-fluid col-7 col-md-4" src="./images/pic_ominostilizzato.png" alt="Login"/>
            </div>
            <form action="./processa_login.php" method="POST">
                <div class="form-group text-center">
                    <label class="invisible" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control shadow-sm p-4 mt-3 bg-white rounded" placeholder="email" autofocus required>
                </div>
                <div class="form-group text-center pb-5">
                    <label class="invisible" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control shadow-sm p-4 bg-white rounded" placeholder="password" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Accedi" class="purple-btn col-10 shadow-sm p-3 mt-4 rounded-pill"/>
                </div>
            </form>
            <div class="form-group text-center">
                <label class="col-4">o</label>
            </div>
            <div class="form-group text-center">
                <a href="./registrazione.php" class="color-purple col-4">Registrati</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-2 col-xl-4 col-md-3 "></div>
</div>
