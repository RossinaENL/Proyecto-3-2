<?php


include 'db_connect.php';  //incluye la concexión con las clases

$animal = new Connection("db1"); //Se define una nueva conexión a partir de las clases que se encuentran en la conexión

//Se rescatan los valores y se pasan los parámetros de la conexión
$query="insert into animales(no_siniiga,arete_camp,fecha_nacimiento,sexo,raza,especificar_raza_cruza,empadre,padre,madre) values ('$_REQUEST[realname]','$_REQUEST[campa]','$_REQUEST[fecha]','$_REQUEST[sex]','$_REQUEST[raz]','$_REQUEST[especificar]','$_REQUEST[empadre]','$_REQUEST[padre]','$_REQUEST[madre]')";
$resultado=$animal->query($query);


//Condición para probar si existe algún error al enviar los datos en la base de datos
if($resultado){
  	echo "<script>location.href='index.php'</script>";    //Después de que los valores se hayan insertado en la tabla la página vuelve a cargar en index.php
}
else{
    echo "no se insertó";     //Si existe algún error en la pantalla aparece no se insertó
}

mysqli_close($animal);
//Se cierra la conexión
?>