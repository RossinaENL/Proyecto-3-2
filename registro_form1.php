<?php

include 'db_connect.php';  //include the db_connect.php file

$registro = new Connection("db1"); //está definidido por el usuario en 


$query="insert into usuarios(clave_de_upp,nombre_del_predio,serie_del,nombre_del_productor,nombre_identificador,al,total_paquetes_completos,fecha_aretado) values ('$_REQUEST[clave1]','$_REQUEST[nombre1]','$_REQUEST[serie]','$_REQUEST[productor]','$_REQUEST[identificador]','$_REQUEST[al]','$_REQUEST[paquetes]','$_REQUEST[fechaA]')";
$resultado=$registro->query($query);


if($resultado){
  	echo "<script>location.href='index.php'</script>";
}
else{
    echo "Error";
}

mysqli_close($registro);

?>