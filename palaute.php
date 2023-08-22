<?php $sivu = "palaute" ?>

<?php include("html_alku.php") ?>

<h1>Palaute</h1>

<hr>

<form action="kiitos_palautteesta.php" method="post">
  <div class="form-group">
    <label for="emailInput">Sähköpostiosoitteesi</label>
    <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Syötä sähköpostiosoitteesi">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nimesi</label>
    <input name="nimi" type="input" class="form-control" id="exampleInputPassword1" 
        placeholder="Syötä nimesi">
  </div>
  <div class="form-group">
    <label for="palauteTextArea">Palautteesi</label>
    <textarea class="form-control" name="palaute" id="palauteTextArea" cols="30" rows="10"
        placeholder="Syötä palautteesi"></textarea>
  </div>
  <button type="submit" class="btn tumma-pohja">Lähetä</button>
</form>

<?php include("html_loppu.php") ?>