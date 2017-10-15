<?php
include 'db_connect.php';   //incluye la concexión con las clases

$mydb = new Connection("db1");  //Se define una nueva conexión a partir de las clases que se encuentran en la conexión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>SINIIGA</title>
<meta charset="utf-8"/>
   
    <!--Función de la barra de navegación-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    <!--Script que ordena los datos de las tablas-->
 <script type="text/javascript" language="javascript" src="js/TablaOrden.js"></script>


        <!--Estilo de toda la estructura del formulario 1-->
<link rel="stylesheet" href="css/bootstrap.min1.css">
     <!--Estilo de toda la estructura del formulario 2-->
    <link rel="stylesheet" href="css/bootstrap.min2.css">
   
    <!--Cuadros que redondean los formularios-->
<link rel="stylesheet" href="css/style.css">
      
</head>
<body id="container-page-configAdmin">


        <div class="container">
            <div class="page-header">
              
                <!--Encabezados con el nombre e imagen de SINIIGA-->
             <div class="posicion" align="center"><img src="ima/logo_sini.png" width="200" ></div>
                <h1>SINIIGA </h1>
                
                <h2><small class="tittles-pages-logo">SISTEMA NACIONAL DE IDENTIFICACIÓN INDIVUDIAL DEL GANADO</small></h2>
                <hr>
              <h2><small class="tittles-pages-logo">CEDULA DE IDENTIDICACION ESPECIE (BOVINA, OVINA Y CAPRINA)</small></h2>
            </div>
            
            <!--Pestañas de navegación -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#registro" role="tab" data-toggle="tab">Registro del productor</a></li>
              <li role="presentation"><a href="#alta" role="tab" data-toggle="tab">Altas</a></li>
            <li role="presentation"><a href="#cambio" role="tab" data-toggle="tab">Cambios</a></li>
                 <li role="presentation"><a href="#baja" role="tab" data-toggle="tab">Bajas</a></li>
            </ul>
            <div class="tab-content">
                
                <!--==============================Panel Registro del productor-Formulario 1===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="registro">
                <div class="row">
                    <!--Espacio de los cuadros de los formularios-->
                  
                        <div class="col-xs-12">
                      
                        <br><br>
                        <div id="add-product">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Registro</h2>
                         <p>Proporcione los datos que se piden en el siguiente formulario para iniciar con el registro.<br><strong>Nota:</strong> Éste primer formulario pide datos de usted como propietario, para dar de alta a los animales favor de llenar el formulario Alta después de haber llenado éste.</p>
                            
                            <!--Inicia el primer formulario con los datos principales-->
        <form role="form" action="registro_form1.php" method="post" >
       <div class="form-group">
      <label ><b>CLAVE DE UPP</b></label>
      <input type="text" name="clave1" class="form-control"  placeholder="Ej: 19-001-0002-001" required maxlength="30"  />
    </div>
                                
              <div class="form-group">
      <label><b>NOMBRE DEL PREDIO</b></label>
      <input type="text" name="nombre1" class="form-control" placeholder="Nombre completo"  required maxlength="30"/>
    </div>                  
                                
                           
                                
             
         <div class="form-group">
      <label><b>SERIE DEL</b></label>
      <input type="text" name="serie" class="form-control" placeholder="Serie del"  required />
    </div>                                                 
                                
         <div class="form-group">
      <label><b>NOMBRE DEL PRODUCTOR </b></label>
      <input type="text" name="productor" class="form-control" placeholder="Nombre completo"  required />
    </div>                                          
    
        <div class="form-group">
      <label ><b>NOMBRE DE TECNICO IDENTIFICADOR</b></label>
      <input type="text" name="identificador" class="form-control" placeholder="Nombre completo"  required />
    </div>                            
                                
                                
        <div class="form-group">
      <label><b>AL</b></label>
      <input type="text" name="al" class="form-control" placeholder="Al"  required />
    </div>
                     
                                
    <div class="form-group">
      <label><b>TOTAL PAQUETES COMPLETOS</b></label>
      <input type="number" name="paquetes" class="form-control"  placeholder="Escribir cantidad"  required />
    </div>
                                
              <div class="form-group">
      <label><b>FECHA ARETADO</b></label>
      <input type="date" name="fechaA" class="form-control"  required />
    </div>
       

   <p class="text-center"><button type="submit" class="btn btn-primary">Registrar</button></p>
                           
                           
 </form>
            <!--Termina el primer formulario-->
                            
<p><strong>CANCELADO:</strong> Se cancelará el paquete completo en caso de que uno de los aretes se cierre involuntariamente. </p>
    
    <p><strong>SOBRANTE:</strong> Serán aquellos aretes que no se coloquen, devolviéndose a la ventanilla SINIIGA correspondiente  </p>
                        </div>
                    </div>
                    
               </div>
                </div>
                <!--==============================Panel altas-Formulario 2===============================-->
                <div role="tabpanel" class="tab-pane fade" id="alta">
                    <div class="row">
                   
                        
                         <!--Espacio de los cuadros de los formularios-->
                  
                        <div class="col-xs-12">
                      
          
                        <br><br>
                        <div id="add-provee">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Altas </h2>
                            <p>Puede dar de alta los animales que desee rellenando éste formulario, tome en cuenta que algunos campos son obligatorios por lo que no podrá enviar sus datos si éstos no se llenan.</p>
                
                            <!--Inicia el segundo formulario-->
                            <!--Los datos de este formulario idenfican a cada animal que estarán relacionados por la clave upp del prodctor-->
   <form   role="form" method="post" action="datos_vacas_form2.php">
                               
     <label style="font-size: 14pt"><b>DATOS OBLIGATORIOS</b></label><br>
    
       <div class="form-group">
      <label><b>No. SINIGA</b></label>
      <input type="text" name="realname" class="control" placeholder="Ej: MX SAGARPA 28-0757-9621"  required />
    </div>
       
    
   
     <div class="form-group">
      <label><b>ARETE CAMPAÑA</b></label>
      <input type="text" name="campa" class="control" placeholder="Arete campaña"  required />
    </div>
       
      <div class="form-group">
      <label><b>FECHA NACIMIENTO</b></label>
      <input type="date" name="fecha" class="control"  required />
    </div>
      
    
    <div class="form-group">
      <label><b>SEXO</b></label>
  
         <select id="select1"  class="control"  required name="sex">
  <option selected></option>
             <option value="Hembra">Hembra</option>
    <option value="Macho">Macho</option>

  </select>
          
  </div>
    
    
     <div class="form-group">
      <label><b>RAZA</b></label>
      
         <select id="select2"  class="control"  required name="raz">
   <option selected></option>
             <option value="Pura">Pura</option>
    <option value="Cruza">Cruza</option>
<option value="Criollo">Criollo</option>
  </select>
  </div>
     
    
     <div class="form-group">
      <label><b>ESPECIFICAR RAZA/CRUZA</b></label>
      <input type="text" name="especificar" class="control" placeholder="Especificar raza/cruza"  required />
    </div>
    

      <label style="font-size: 14pt"><b>RAZA Ó No. SINIIGA</b></label><br>
    
       <div class="form-group">
      <label><b>EMPADRE</b></label>
 
  <select  name="empadre" id="select3" class="control">
      <option selected></option>
    <option value="Natural">Monta natural</option>
    <option value="Artificial">Inseminación artificial</option>
<option value="Hembrionaria">Transferencia hembrionaria</option>
  </select>
 </div>
    
    
    
     
     <div class="form-group">
      <label><b>PADRE</b></label>
      <input type="text" name="padre" class="control" placeholder="Padre"  />
    </div>
    
     <div class="form-group">
      <label><b>MADRE</b></label>
  
      <input type="text" name="madre" class="control" placeholder="Madre"  />
    </div>
    
  <p class="text-center"><button type="submit" class="btn btn-primary">Agregar</button></p>

 </form>
           <!--Termina el segundo formulario-->                               
<p><strong>CANCELADO:</strong> Se cancelará el paquete completo en caso de que uno de los aretes se cierre involuntariamente. </p>
    
    <p><strong>SOBRANTE:</strong> Serán aquellos aretes que no se coloquen, devolviéndose a la ventanilla SINIIGA correspondiente  </p>
                        </div>
                    </div>
                 
     
                        
                        
                        
                        
                      <!--Estructura de la tabla-->
                    <div class="col-xs-12">
                         <br>
                        <!--Acomodar valores de tabla-->
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Ordenar por:</h2>
                                              
      <!--Ordenar, la palabra tablaAltas es un arreglo que idenfica cada columna para acomodarla al presionar el radioButton-->
                <form>
                   
                   <table  align="center">
                   <tbody>
                   <tr>
                       
                       <td >                       
                            <input type="radio"  onclick="TablaOrden.en('tablaAltas',0)" name="radioTask"> No. SINIIGA 
                       </td>
                
                        <td>
                             <input type="radio"  onclick="TablaOrden.en('tablaAltas',1)" name="radioTask">Arete campaña 
                       </td>
                       <td>
                           <input type="radio"  onclick="TablaOrden.en('tablaAltas',2)" name="radioTask"> Fecha nacimiento 
                      
                       </td>
                       <td>
                         
                        <input type="radio" onclick="TablaOrden.en('tablaAltas',3)"  name="radioTask"> Sexo 
                       </td>
                        
                       </tr>
                   <tr>
                       
                       <td>
                             <input type="radio" onclick="TablaOrden.en('tablaAltas',4)"  name="radioTask"> Raza  
                       </td>
                       <td>
                    <input type="radio" onclick="TablaOrden.en('tablaAltas',5)"  name="radioTask"> Espeficación de raza 
                       </td>
                        
                             <td>
                          <input type="radio" onclick="TablaOrden.en('tablaAltas',6)"  name="radioTask"> Empadre
                       
                       </td>
                              <td>
                        <input type="radio" onclick="TablaOrden.en('tablaAltas',7)"  name="radioTask"> Padre 
                           </td>
                     
                       
                       </tr>
                       <tr>
                     
                    
                   
                           <td>
                              <input type="radio" onclick="TablaOrden.en('tablaAltas',8)"  name="radioTask"> Madre 
                           </td>
                      
                             
                       </tr>
                      </tbody>
                   
                   </table>
                   
        <p align="center">Ordene de forma ascendente o descendente de acuerdo a la categoría que desea dando clic en el círculo</p> 
                           
                          
               
    </form>
              
              </div>
                        <!--Fin de orden de datos de tabla-->
                        <br>
                        <!--Tabla-->
                       
                     <div class="panel panel-info">
                            
                            
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Datos</h3></div>
                          
                        
                          <div class="table-responsive">
                              
                              <!-- Nombre de tablaAltas que utiliza el arreglo creado para ordenar-->
                    <table id='tablaAltas' class="table table-bordered">
                     
                        
                        <thead>
                            <tr>
                        <th class="text-center">No. Siniiga</th>
                        <th class="text-center">Arete campaña</th>
                        <th class="text-center">Fecha nacimiento</th>
                        <th class="text-center">Sexo</th>
                        <th class="text-center">Raza</th>
                        <th class="text-center">Especificar raza/cruza</th>
                        <th class="text-center">Empadre</th>
                            <th class="text-center">Padre</th>
                            <th class="text-center">Madre</th>
                            <!--onclick="TablaOrden.en('miTabla',8)"-->
                                
                        </thead>
                     <tbody>
               
               <?php     $getusers = $mydb->query("SELECT * FROM animales");
				while($row=mysql_fetch_array($getusers)){ ?>
					
<tr>
                                      
              <td class="text-center"><?php echo $row['no_siniiga'];?></td>
     <td class="text-center"><?php echo $row['arete_camp'];?></td>
     <td class="text-center"><?php echo $row['fecha_nacimiento'];?></td>
     <td class="text-center"><?php echo $row['sexo'];?></td>
     <td class="text-center"><?php echo $row['raza'];?></td>
     <td class="text-center"><?php echo $row['especificar_raza_Cruza'];?></td>
     <td class="text-center"><?php echo $row['empadre'];?></td>
     <td class="text-center"><?php echo $row['padre'];?></td>
    <td class="text-center"><?php echo $row['madre'];?></td>
    
                                      
    </tr>              
                              
                                      
                                      
                                      
                                     
                                   <?php } ?> 
                                  </tbody>
                    </table>
            
         </div>
                        </div>
                        
                        <!--Fin tabla-->
                        
       </div>
                </div>
                </div>
               
             
                
                
                
                
                   <!--==============================Panel cambios-Formulario 3===============================-->
                <div role="tabpanel" class="tab-pane fade" id="cambio">
                    <div class="row">
                   
                        
                        
                      <!--Estructura de la tabla-->
                                                
                        <div class="col-xs-12">
                         <br>
                            <p>En esta sección usted prodrá hacer cambios en los datos de los animales. Para ésto presione en el botón modificar según la fila seleccionada</p>
                          
                        <!--Acomodar valores de tabla-->
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Ordenar por:</h2>
          
                            <!--Ordenar, la palabra tablaCambios es un arreglo que idenfica cada columna para acomodarla al presionar el radioButton-->                        
                 
               <form>
                   
                   <table  align="center">
                   <tbody>
                   <tr>
                       
                       <td >
                            <input type="radio"  onclick="TablaOrden.en('tablaCambios',0)" name="radioTask"> No. SINIIGA 
                       </td>
                
                        <td>
                             <input type="radio"  onclick="TablaOrden.en('tablaCambios',1)" name="radioTask">Arete campaña 
                       </td>
                       <td>
                        <input type="radio"  onclick="TablaOrden.en('tablaCambios',2)" name="radioTask"> Fecha nacimiento 
                       </td>
                         
                       <td>
                          <input type="radio" onclick="TablaOrden.en('tablaCambios',3)"  name="radioTask"> Sexo 
                       
                       </td>
                        
                       </tr>
                   <tr>
                       
                       <td>
                             <input type="radio" onclick="TablaOrden.en('tablaCambios',4)"  name="radioTask"> Raza  
                       </td>
                       <td>
                    <input type="radio" onclick="TablaOrden.en('tablaCambios',5)"  name="radioTask"> Espeficación de raza 
                       </td>
                        
                             <td>
                          <input type="radio" onclick="TablaOrden.en('tablaCambios',6)"  name="radioTask"> Empadre
                       
                       </td>
                              <td>
                        <input type="radio" onclick="TablaOrden.en('tablaCambios',7)"  name="radioTask"> Padre 
                           </td>
                     
                       
                       </tr>
                       <tr>
                     
                    
                   
                           <td>
                              <input type="radio" onclick="TablaOrden.en('tablaCambios',8)"  name="radioTask"> Madre 
                           </td>
                      
                             
                       </tr>
                       
                       
                      
                       
                       
                       </tbody>
                   
                   </table>
                   
        <p align="center">Ordene de forma ascendente o descendente de acuerdo a la categoría que desea dando clic en el círculo</p> 
                           
                          
                   
    </form>

                            
                            </div>
                        <!--Fin de orden de datos de tabla-->
                        <br>
                        <!--Tabla-->
                       
                     <div class="panel panel-info">
                            
                            
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Datos</h3></div>
                          
                        
                          <div class="table-responsive">
                              
      
             <!-- Nombre de tablaCambios que utiliza el arreglo creado para ordenar-->
                    <table id='tablaCambios' class="table table-bordered">
                     
                        
                        <thead>
                            <tr>
                        <th class="text-center">No. Siniiga</th>
                        <th class="text-center">Arete campaña</th>
                        <th class="text-center">Fecha <br>nacimiento</th>
                        <th class="text-center" >Sexo_animal </th>
                        <th class="text-center"> Raza_animal   </th>
                        <th class="text-center">Especificar<br> raza/cruza</th>
                        <th class="text-center">Empadre</th>
                            <th class="text-center">Padre</th>
                            <th class="text-center">Madre</th>
                                <th class="text-center">Cambios</th>
                            <!--onclick="TablaOrden.en('miTabla',8)"-->
                                
                        </thead>
                     <tbody>
               
               <?php     $getusers = $mydb->query("SELECT * FROM animales");
				while($row=mysql_fetch_array($getusers)){ ?>
				<form action="proceso_modificar.php?animal_id=<?php echo $row['animal_id']; ?>"  method="post"> 	
<tr>
                                      
     <td class="text-center"><input type="text"  name="numero" class="form-control" value=" <?php echo $row['no_siniiga'];?>" required/></td>
     <td class="text-center"><input type="text" name="arete" class="control" value="<?php echo $row['arete_camp'];?>" required/></td> 
     <td class="text-center"><input type="date" name="fec" class="control"  value="<?php echo $row['fecha_nacimiento'];?>" required /></td>
     <td class="text-center">
         <select id="sele"  class="control" name="sexos" required>
         <option selected><?php echo $row['sexo'];?></option>
             <option value="Hembra">Hembra</option>
             <option value="Macho">Macho</option>

    </select>
      </td>
     <td class="text-center">
       <select id="sele2"  class="control"   name="razas" required>
       <option selected> <?php echo $row['raza'];?></option>
       <option value="Pura">PURA</option>
       <option value="Cruza">CRUZA</option>
       <option value="Criollo">CRIOLLO</option>
       </select>
     </td>
    
     <td class="text-center"> <input type="text" name="especifico" class="control" value="<?php echo $row['especificar_raza_Cruza'];?>" required/>
         
     </td>
    
    <td class="text-center">
       <select  name="empadres" id="sele3" class="control" >
      <option selected><?php echo $row['empadre'];?></option>
    <option value="Natural">MONTA NATURAL</option>
    <option value="Artificial">INSEMINACION ARTIFICIAL</option>
    <option value="Hembrionaria">TRANSFERENCIA HEMBRIONARIA</option>
      </select>
     
   </td>
    
     <td class="text-center">
         <input type="text" name="papa" class="control" value="<?php echo $row['padre'];?>" /></td>
   
    <td class="text-center">
          <input type="text" name="mama" class="control" value="<?php echo $row['madre'];?>" /></td>
    
    <td>  <input class="btn btn-primary" type="submit" value="Modificar"/>  </td>

       
    
    

    </tr>
                         </form>
   <?php } ?> 
            </tbody>
              </table>
            
              </div>
                 </div>
                        
                        <!--Fin tabla-->
                 </div>
                        
          
                </div>
                </div>
                
                  
                
                   <!--==============================Panel bajas-Formulario 4===============================-->
           <div role="tabpanel" class="tab-pane fade" id="baja">
                    <div class="row">
                   
                        
                         <!--Espacio de los cuadros de los formularios-->
                   <!-- <div class="col-xs-12 col-sm-6">-->
           
     
                        
                        
                        
                        
                      <!--Estructura de la tabla-->
                        <div class="col-xs-12">
                         <br>
                              <p>Si desea dar de baja a un animal presione el botón eliminar de la tabla según la fila seleccionada</p>
                        <!--Acomodar valores de tabla-->
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Ordenar por:</h2>
                                              
          <!--Ordenar, la palabra tablaBaja es un arreglo que idenfica cada columna para acomodarla al presionar el radioButton-->
      
          <form>
                   
                   <table  align="center">
                   <tbody>
                   <tr>
                       
                       <td >
                            <input type="radio"  onclick="TablaOrden.en('tablaBaja',0)" name="radioTask"> No. SINIIGA 
                       </td>
                
                        <td>
                             <input type="radio"  onclick="TablaOrden.en('tablaBaja',1)" name="radioTask">Arete campaña 
                       </td>
                       <td>
                           <input type="radio"  onclick="TablaOrden.en('tablaBaja',2)" name="radioTask"> Fecha nacimiento 
                      
                       </td>
                       <td>
                         
                        <input type="radio" onclick="TablaOrden.en('tablaBaja',3)"  name="radioTask"> Sexo 
                       </td>
                        
                       </tr>
                   <tr>
                       
                       <td>
                             <input type="radio" onclick="TablaOrden.en('tablaBaja',4)"  name="radioTask"> Raza  
                       </td>
                       <td>
                    <input type="radio" onclick="TablaOrden.en('tablaBaja',5)"  name="radioTask"> Espeficación de raza 
                       </td>
                        
                             <td>
                          <input type="radio" onclick="TablaOrden.en('tablaBaja',6)"  name="radioTask"> Empadre
                       
                       </td>
                              <td>
                        <input type="radio" onclick="TablaOrden.en('tablaBaja',7)"  name="radioTask"> Padre 
                           </td>
                     
                       
                       </tr>
                       <tr>
                     
                    
                   
                           <td>
                              <input type="radio" onclick="TablaOrden.en('tablaBaja',8)"  name="radioTask"> Madre 
                           </td>
                      
                             
                       </tr>
                       
                       
                      
                       
                       
                       </tbody>
                   
                   </table>
                   
        <p align="center">Ordene de forma ascendente o descendente de acuerdo a la categoría que desea dando clic en el círculo</p> 
                           
                          
                   
    </form>
              
                        
    
                         </div>
                        <!--Fin de orden de datos de tabla-->
                        <br>
                        <!--Tabla-->
                       
                     <div class="panel panel-info">
                            
                            
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Datos</h3></div>
                          
                        
                          <div class="table-responsive">
                           <!-- Nombre de tablaBaja que utiliza el arreglo creado para ordenar-->
                    <table id='tablaBaja' class="table table-bordered">
                     
                        
                        <thead>
                            <tr>
                        <th class="text-center">No. Siniiga</th>
                        <th class="text-center">Arete campaña</th>
                        <th class="text-center">Fecha nacimiento</th>
                        <th class="text-center">Sexo</th>
                        <th class="text-center">Raza</th>
                        <th class="text-center">Especificar raza/cruza</th>
                        <th class="text-center">Empadre</th>
                            <th class="text-center">Padre</th>
                            <th class="text-center">Madre</th>
                        <th class="text-center">Baja</th>
                            <!--onclick="TablaOrden.en('miTabla',8)"-->
                                
                        </thead>
                     <tbody>
               
               <?php     $getusers = $mydb->query("SELECT * FROM animales");
				while($row=mysql_fetch_array($getusers)){ ?>
			<form action="proceso_borrar.php?animal_id=<?php echo $row ['animal_id'] ?>"  method="post"> 			
<tr>
                                      
              <td class="text-center"><?php echo $row['no_siniiga'];?></td>
     <td class="text-center"><?php echo $row['arete_camp'];?></td>
     <td class="text-center"><?php echo $row['fecha_nacimiento'];?></td>
     <td class="text-center"><?php echo $row['sexo'];?></td>
     <td class="text-center"><?php echo $row['raza'];?></td>
     <td class="text-center"><?php echo $row['especificar_raza_Cruza'];?></td>
     <td class="text-center"><?php echo $row['empadre'];?></td>
     <td class="text-center"><?php echo $row['padre'];?></td>
    <td class="text-center"><?php echo $row['madre'];?></td>
   <th><input class="btn btn-danger" type="submit" value="Eliminar"/></th>
                                      
    </tr>              
                              
                         </form>            
                                      
                                      
                                     
                                   <?php } ?> 
                                  </tbody>
                    </table>
            
         </div>
                        </div>
                        
                        <!--Fin tabla-->
              
                    </div>
                      
                </div>
                </div>
   </div>
            
  </div>
  
</body>
</html>