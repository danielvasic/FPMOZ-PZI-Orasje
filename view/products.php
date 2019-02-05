-<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 onclick="alert('kliknuli ste na dobrodosli');">Dobrodošli na sustav</h1>
            <h2>Ovdje je prikaz proizvoda</h2>
            <p>Prijavljeni ste kao
                <?php print($korisnik['ime']); ?>
                <?php print($korisnik['prezime']); ?>
                <a href="index.php?controller=login&action=logout">odjavite se</a>.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-3">
            <button id="prikaz_forme" class="btn btn-primary float-right">Dodaj proizvod</button>
        </div>
    </div>
    <div class="row" id="forma" style="display:none">
        <div class="col-md-12">
            <form enctype="multipart/form-data" method="POST" action="index.php?controller=products&action=add">
                <div class="form-group">
                    <label for="naziv">Unesite naziv proizvoda</label>
                    <input type="text" name="naziv"  class="form-control" placeholder="Naziv proizvoda">
                </div>

                <div class="form-group">
                    <label for="naziv">Unesite cijenu proizvoda</label>
                    <input type="text" name="cijena"  class="form-control" placeholder="Cijena proizvoda">
                </div>

                <div class="form-group">
                    <label for="naziv">Odaberite sliku</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="slika">
                        <label class="custom-file-label" for="slika">Odaberite sliku proizvoda</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php if (count($proizvodi) >0): ?>
    <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Cijena</th>
                    <th>Slika</th>
                    <th>Akcije</th>
                </tr>
                <?php foreach($proizvodi as $key => $value): ?>
                    <tr>
                        <td><?php echo($value['id']); ?></td>
                        <td><?php echo($value['naziv']); ?></td>
                        <td><?php echo($value['cijena']); ?></td>
                        <td><img class="img-fluid" src="<?php echo($value['slika']); ?>" /></td>
                        <td><a href="index.php?controller=products&action=delete&id=<?php echo($value['id']); ?>">Briši</a></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <?php endif; ?>
</div>