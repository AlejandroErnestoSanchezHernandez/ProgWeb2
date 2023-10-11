<?php
if ($_SERVER["REQUEST_METHOD"] ){
   $nombre = $_POST["txtnombre"];
   $edad = $_POST["txtedad"];
   $correo = $_POST["txtcorreo"];
   $pass = $_POST["txtpasswd"];

   echo "<p>Mi nombre es: " . $nombre .  "</p>";
   echo "<p>Mi edad es: " . $edad . "</p>";
   echo "<p>Mi correo es: " . $correo . "</p>";
   echo "<p>Mi contraseña es: " . $pass . "</p>";
   echo "<a href='index.php'>Al inicio</a>";
   exit();
}
?>
