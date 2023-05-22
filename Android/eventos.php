<?php
$conexion=mysqli_connect('localhost','u583014169_greateventt','u583014169_greateventt','gtaV19921963');
if(!$conexion){
    echo "error en conexion";
}

$result=array();
$query="SELECT * FROM evento";
$responce=mysqli_query($conexion,$query);

while($row=mysqli_fetch_array($responce))
{

$result[] = $row;
}
echo json_encode($result);

?>