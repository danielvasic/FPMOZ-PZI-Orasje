<h1 onclick="alert('kliknuli ste na dobrodosli');">Dobrodošli na sustav</h1>
<h2>Ovdje je prikaz proizvoda</h2>
<p>Prijavljeni ste kao <?php print($korisnik['ime']); ?> <?php print($korisnik['prezime']); ?> 
<a href="index.php?controller=login&action=logout">odjavite se</a>.
</p>