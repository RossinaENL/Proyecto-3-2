<?php
include 'db_connect.php';  //incluye la concexión con las clases

$modifi = new Connection("db1"); //Se define una nueva conexión a partir de las clases que se encuentran en la conexión

//Se recupera la id de la tabla animales para poder identificar las filas y editarlas
    $id=$_REQUEST['animal_id'];



$query="UPDATE animales SET no_siniiga='$_REQUEST[numero]',arete_camp='$_REQUEST[arete]',fecha_nacimiento='$_REQUEST[fec]',sexo='$_REQUEST[sexos]',raza='$_REQUEST[razas]', especificar_raza_cruza='$_REQUEST[especifico]',empadre='$_REQUEST[empadres]',padre='$_REQUEST[papa]',madre='$_REQUEST[mama]' WHERE animal_id='$id'";
$resultado=$modifi->query($query);


//Condición después de editar los valores
if($resultado){
 echo "<script>location.href='index.php'</script>"; 
    
}
else{
    echo "no se inserto";
}

mysqli_close($modificar);

?>

