<?php

include("con_ja.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['name']) >= 1 &&
        strlen($_POST['pass']) >= 1) {

        $users = trim($_POST['name']);
        $password = trim($_POST['pass']); 
        $fecha_reg = date("d/m/y"); 

        $consultas = "INSERT INTO usuario(nombre, contrasena, fecha_reg) VALUES ('$users','$password','$fecha_reg')";
        $resultado = mysqli_query($conem, $consultas);

        if ($resultado) {
            ?>
            <h3 class="ok">Registro exitoso</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">Ocurrió un error al registrar</h3>
            <?php
        }

    } else {
        ?>
        <h3 class="bad">Por favor, complete todos los campos</h3>
        <?php 
    }
}

?>


<?php

