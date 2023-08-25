<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>CreationUsager</title>
</head>

<body>
  <?php
  //On crée les variables du formulaire vide
  $nom = $motpasse = $motpasseconfirme = $courriel = $image = $sexe = $datenaissance = $transport = "";

  //On crée les variables d'erreurs vides
  $nomErreur = $champsErreur = $erreurMotPasseIdentique = $erreurCourriel =  "";

  //La variable qui permet de savoir s'il y a au moins une erreur dans le formulaire
  $erreur = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST";
    //Si on entre, on est dans l'envoie du formulaire

    if ($_POST['nom'] == "SLAY") {
      $nomErreur = "Le nom est déjà pris";
      $erreur = true;
    } else {
      $nom = test_input($_POST["nom"]);
    }
    if (empty($_POST['nom']) || empty($_POST['motpasse']) || empty($_POST['motpasseconfirme']) || empty($_POST['courriel']) || empty($_POST['image']) || empty($_POST['sexe']) || empty($_POST['datenaissance']) || empty($_POST['transport'])) {
      $champsErreur = "Veuillez remplir tout les champs";
      $erreur = true;
    }
    $image = test_input($_POST["image"]);


    // Inserer dans la base de données
    //SI erreurs, on réaffiche le formulaire 
  }
  if ($_SERVER["REQUEST_METHOD"] != "POST" || $erreur == true) {
    echo "Erreur ou 1ere fois";

  ?>
    <form class="row g-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="col-md-4">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" required>
        <div class="valid-feedback">
          Valide
        </div>
      </div>
      <div class="col-md-4">
        <label for="motPasse" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="motPasse" required>
        <div class="valid-feedback">
          Valide
        </div>
      </div>
      <div class="col-md-4">
        <label for="motPasseConfirme" class="form-label">Confirmer mot de passe</label>
        <input type="password" class="form-control" id="motPasseConfirme" required>
        <div class="valid-feedback">
          Valide
        </div>
      </div>
      <div class="col-md-4">
        <label for="courriel" class="form-label">Courriel</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="email" class="form-control" id="courriel" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Veuillez écrire votre adresse courriel
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">City</label>
        <input type="text" class="form-control" id="validationCustom04" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">State</label>
        <select class="form-select" id="validationCustom05" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input type="text" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
        <span style="color:red" ;><?php echo $champsErreur; ?></span><br>
        <span style="color:red" ;><?php echo $nomErreur; ?></span><br>
      </div>
    </form>
<!--
    <form  method="post">
      
      <div>Nom</div> <input type="text" name="nom" maxlength="15"><br>
     

      <div>Image</div><input type="text" name="image" value="<?php echo $image; ?>"><br>

      <input type="submit">
    </form>
  -->
  <?php
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="validation.js"></script>
</body>

</html>