<?php
session_start();
include('../model/conection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = mysqli_real_escape_string($conection, $_POST['userName']);
    $userEmail = mysqli_real_escape_string($conection, $_POST['userEmail']);
    $userPasword = mysqli_real_escape_string($conection, $_POST['userPasword']);

    $sqlInsert = "INSERT INTO users (userName, userEmail, userPasword) VALUES ('$userName', '$userEmail', '$userPasword')";

    if ($conection->query($sqlInsert) === true) { ?>
        <script>
            alert('Registro insertado exitosamente');
                window.location.href = '../view/index.html';
        </script>
    <?php
    } else { ?>
        <script>
            alert('Registro no insertado');
                window.location.href = '../view/wrongData.html';
        </script>
    <?php
    }

    $conection->close();
}
?>
