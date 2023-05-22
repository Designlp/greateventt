<?php

$conexion=mysqli_connect('localhost','u583014169_greateventt','u583014169_greateventt','gtaV19921963');
if(!$conexion){
    echo "error en conexion";
}

$res['estado'] = array();

$IdEvento=$_POST["IdEvento"];


//codigo logica

$query="DELETE FROM evento WHERE Id_Evento=$IdEvento"; 

$resultado=mysqli_query($conexion,$query);

if($resultado){
    $index2['est']='0';
    array_push($res['estado'],$index2);
}
else{
    $index2['est']='1';
    array_push($res['estado'],$index2);
}
echo json_encode($res);
mysqli_close($conexion);


?>
