<?php
include "header.php";
?>

<div class="container mt-5">
<h2 class="pt-3 text-center">Ajouter une nationalité</h2>
<form action="valideAjoutNationalite.php" method="post" class="col-md-6 offset-md-3 border-primary p-3 rounded">
<div class="form-group">
<label for="libelle"> libellé</label>
<input type="text" class="form-control" id="libelle" placeholder='Saisir le libellé' name='lebelle'>
</div>
<div class="col"><a href="listeNationalites.php" class="btn-warning btn-block">Revenir à la liste</a></div>
<div class="col"><button type="submit" class="btn btn-success">Ajouter</button></div>
</form>
</div>
<?php
include "footer.php";
?>