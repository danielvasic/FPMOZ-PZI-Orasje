<div class="container">
    <div class="row align-items-center h-100">
        <div class="col-md-6 offset-md-3">
            <?php if (isset($greska)) { ?>
                <div class="alert alert-danger">
                    <?php print($greska);?>
                </div>
            <?php } ?>
            <form method="POST" action="index.php?controller=login&action=login">
                <div class="form-group">
                    <label for="korisnicko_ime">Korisničko ime</label>
                    <input class="form-control" type="text" name="korisnicko_ime" />
                </div>
                <div class="form-group">
                    <label for="lozinka">Lozinka</label>
                    <input class="form-control" type="password" name="lozinka" />
                </div>
                <button type="submit" class="btn btn-primary">Prijavite se</button>
            </form>
        </div>
    </div>
</div>