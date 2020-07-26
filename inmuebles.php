<?php
include 'clasedb.php';
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();
$sql="CREATE TABLE inmuebles (id int (11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem VARCHAR (50) NOT NULL, estacionamiento ENUM('Si','No'), status ENUM('Ocupado','Desocupado','Mantenimiento'), tipo ENUM ('Casa','Apartamento','Chalet','Quinta','Otro'), cod_postal VARCHAR  (5));";
$sql="ALTER TABLE add UNIQUE (idem)";
$result=mysqli_query($conex,$sql);
if ($result){
    echo "tabla creada con éxito";
}
    else{
echo "la tabla no pudo ser creada";}

 function registrar(){
$chaletReg=0;
$apartamentoReg=0;
$otrosReg=0;
$casasReg=0;
$quintasReg=0;
for($j=0; $j<20; $j++)

switch (random_int(1, 5)){
case 1:
$tipo="Quinta";
echo "<br>quinta registrada";
echo" <br> ";
$quintasReg++;
$idem=rand(1,500);
$r=rand(1,3);
if ($r==1)
$status="Mantenimiento";
if($r==2)
$status="Ocupado";
if($r==3)
$status= "Desocupado";

$q=random_int(1,2);
if($q==1)
    $estacionamiento="Si";
if($q==2)
$estacionamiento="No";
break;
case 2: 
echo "<br>casa registrada";
$casasReg++;
$tipo="Casa";
$cod_postal=random_int(1111,9000);
$idem=rand(1,500)
$r=rand(1,3);
if ($r==1)
$status="Mantenimiento";
if($r==2)
$status="Ocupado";
if($r==3)
$status= "Desocupado";
$q=random_int(1,2);
if($q==1)
    $estacionamiento="Si";
if($q==2)
$estacionamiento="No";
break;
case 3: 
echo "<br>apartamento registrado";
$apartamentoReg++;

$tipo="Apartamento";
$cod_postal=random_int(1111,9000); 
$idem=rand(1,500)
$r=rand(1,3);
if ($r==1)
$status="Mantenimiento";
if($r==2)
$status="Ocupado";
if($r==3)
$status= "Desocupado";
$q=random_int(1,2);
if($q==1)
    $estacionamiento="Si";
if($q==2)
$estacionamiento="No";
break;
case 4:
echo "<br>chalet registrado";

$chaletReg++;
$tipo="Chalet";
$cod_postal=random_int(1111,9000); 
$r=rand(1,3);
if ($r==1)
$status="Mantenimiento";
if($r==2)
$status="Ocupado";
if($r==3)
$status= "Desocupado";
    $q=random_int(1,2);
if($q==1)
    $estacionamiento="Si";
if($q==2)
$estacionamiento="No";
    
break;
case 5:
echo "<br>vivienda registrada";
$cod_postal=random_int(1111,9000); 
$tipo="Otro";
$otrosReg++;
$idem=rand(1,500)
$r=rand(1,3);
if ($r==1)
$status="Mantenimiento";
if($r==2)
$status="Ocupado";
if($r==3)
$status= "Desocupado";
$q=random_int(1,2);
if($q==1)
    $estacionamiento="Si";
if($q==2)
$estacionamiento="No";
break;
}
echo "<br><br>casas registradas: $casasReg";
echo "<br> apartamentos registrados $apartamentoReg";
echo "<br> chalet registrados $chaletReg";
echo "<br> quintas Registradas: $quintasReg";
echo "<br> otras viviendas registradas:  $otrosReg";

$total =$chaletReg+$apartamentoReg+$quintasReg+$casasReg+$otrosReg;
echo "<br> registros totales: $total";

$sql="INSERT INTO inmuebles (estacionamiento,tipo,status,cod_postal)
VALUES('".$estacionamiento."','".$tipo."','".$status."','".$cod_postal."')";

$resultado=mysqli_query($conex,$sql);
    
if ($resultado) {

   echo"Registros ingresados";
}else{
  
    echo "Registros no ingresados";
}
}
registrar(); 


?>
