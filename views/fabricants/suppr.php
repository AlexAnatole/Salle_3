<h1>Suppression d'un fabricant</h1>
<form action="<?= PATH ?>/fabricants/suppr_sauve/<?= $fabricant['ID_FABRICANT'] ?>" method="POST">
        <div class="form-group">
          <label for="Id">Code fabricant :</label>
          <input type="text" class="form-control" placeholder="Saisir un Code" name="Id" id="Id"
          value=<?= $fabricant['ID_FABRICANT'] ?> readonly>
        </div>
        <div class="form-group">
          <label for="Nom">Nom fabricant:</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value=<?= $fabricant['NOM_FABRICANT'] ?> readonly> 
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>  
<a href="<?= PATH ?>/fabricants"><button  class="btn btn-warning">Retour à la liste</button></a>