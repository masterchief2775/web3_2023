<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Exercice Ajouter.php</title>
</head>

<body>
    <?php
    $marque = $modele = $prix = $url = "";

    $champsErreur = "";

    $erreur = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "POST";

        if (empty($_POST['marque']) || empty($_POST['modele']) || empty($_POST['prix']) || empty($_POST['url'])) {
            $champsErreur = "Veuillez remplir tout les champs";
            $erreur = true;
        }
        $marque = test_input($_POST["marque"]);
        $modele = test_input($_POST["modele"]);
        $prix = test_input($_POST["prix"]);
        $url = test_input($_POST["url"]);
    }
    if ($_SERVER["REQUEST_METHOD"] != "POST" || $erreur == true) {
        echo "Erreur ou 1ere fois";
    ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <form class="row g-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="validationCustom01" name="marque" required>
                            <div class="invalid-feedback">
                                Veuillez entrer une marque de voiture.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Modèle</label>
                            <input type="text" class="form-control" id="validationCustom02" name="modele" required>
                            <div class="invalid-feedback">
                                Veuillez entrer un modèle de voiture qui correspond à la marque.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Prix</label>
                            <input type="text" class="form-control" id="validationCustom03" name="prix" required>
                            <div class="invalid-feedback">
                                Veuillez entrer le prix à l'affichage de la voiture.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">URL</label>
                            <input type="text" class="form-control" id="validationCustom04" name = "url"required>
                            <div class="invalid-feedback">
                                Veuillez entrer un URL qui pointe vers l'image de cette voiture.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Confirmer</button>
                            <span style="color:red" ;><?php echo $champsErreur; ?></span><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
    <script src="validation.js"></script>
</body>

</html>