<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Exercice Index.php</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-xl-12">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Marque</th>
                            <th scope="col">Modèle</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $db = "vehicule";

                        $conn = new mysqli($servername, $username, $password, $db);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        echo "<b>Connected successfully</b>";
                        $conn->query('SET NAMES utf8');
                        $sql = "SELECT * FROM voiture";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>" . " <th scope = 'row'> " . $row["id"] . "</th>" . "<td>" . $row["marque"] . "</td>" . "<td>" . $row["modele"] . "</td>" . "<td>" . $row["prix"] . "</td>" . "<td>"  . "<img src = '" . $row["url"] . "'>" . "</td> " . "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </tbody>
                </table>
                <b><a href="ajouter.php">Ajouter dans la BD</a></b>
            </div>
        </div>
    </div>


</body>

</html>