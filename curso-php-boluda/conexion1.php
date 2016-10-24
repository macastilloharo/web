<h1> Conexión a la DB con funciones</h1>

<?php
$con = mysqli_connect("localhost","root","","customerdb");
//mysqli_select_db("customerdb",$conexion);
$qry = mysqli_query($con,"SELECT * FROM cb_language");
var_dump($qry);
while($fila=mysqli_fetch_array($qry)){
    echo $fila['idlanguage'] . '-' . $fila['namelanguage'];
    ?><br><?php
   
}

?>