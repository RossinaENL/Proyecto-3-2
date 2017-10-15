<?php

include 'db_connect.php';  //incluye la concexión con las clases

$borro = new Connection("db1"); //Se define una nueva conexión a partir de las clases que se encuentran en la conexión

//Se recupera la id de la tabla animales para poder identificar las filas y eliminarlas
$id = $_REQUEST['animal_id'];

$query="DELETE FROM animales WHERE animal_id='$id'";
$resultado=$borro->query($query);


//Condición al borrar
if($resultado){
  	echo "<script>location.href='index.php'</script>"; 
    
}
else{
    echo "no se ELIMINO";
}
mysqli_close($borro);
?>
