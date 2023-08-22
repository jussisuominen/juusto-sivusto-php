<?php $sivu = "etusivu" ?>

<?php include("html_alku.php") ?>

<h1>Kiitos, <?php echo $_POST["nimi"] ?>, palautteestasi!</h1>

<hr>

<p>Seuraavassa vielä lähettämäsi tiedot:</p>

<p><strong>Sähköpostiosoitteesi:</strong> <?php echo $_POST["email"] ?></p>
<p><strong>Nimesi:</strong> <?php echo $_POST["nimi"] ?></p>
<p><strong>Palautteesi:</strong> <?php echo $_POST["palaute"] ?></p>

<?php include("html_loppu.php") ?>