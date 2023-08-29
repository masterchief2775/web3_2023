<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "chiens";
    //Creation connexion
    $conn = new mysqli($servername, $username, $password, $db);
    //Check connnexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    //Ne fait rien, créer une chaine de caractère avec une requête.
    $sql = "SELECT * FROM chiens";

    //L'action.
    $result = $conn->query($sql);

    if($result->$num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id :" . $row["id"]. "race:" . $row["couleur"] . "age:" . $row["age"] ."<br>"; 
        }
    } else {
        echo "0 results";
    }
    ?>
</body>

</html>