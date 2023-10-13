<?php
if ($_SERVER["REQUEST_METHOD"] ){
       $DatoCal=$_GET["calificacion"];

        if ($DatoCal <4){
            echo "Tienes que repetir la clase";
            echo "<a href="index.php">Inicio</a>"
                        
            }else if($DatoCal == 4 || $DatoCal == 5) {
            echo "Echale ganitas";
            echo "<a href="index.php">Inicio</a>";
           }else if($DatoCal == 5 || $DatoCal == 6){
            echo "Apenas y pasaste";
            echo "<a href="index.php">Inicio</a>";
           }else if ($DatoCal == 7 || $DatoCal == 8){
            echo "Very Good";
            echo "<a href="index.php">Inicio</a>";
           }else if($DatoCal >8 && $DatoCal < 11){
            echo "Eres el/la mejor";            
            echo "<a href="index.php">Inicio</a>";
        }
        exit();
}
?>
