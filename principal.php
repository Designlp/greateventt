<?php
$conexion=mysqli_connect('localhost','u583014169_greateventt','u583014169_greateventt','gtaV19921963');

?>

<!DOCTYPE html> 
<html>
    <head>
        <title>mostrar datos </title>
</head>
<body>
    <br>
    <table>
        <tr>
            <td>Id Evento</td>
            <td>Nombre Eventos</td>
            <td>Lugar</td>
            <td>Fecha</td>
            <td>Hora</td>
            <td>IdAdmin</td>
        
</tr>
<?
$sql="SELECT * FROM eventos";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar['IdEvento'] ?></td>
    <td><?php echo $mostrar['Nombre_Evento'] ?></td>
    <td><?php echo $mostrar['Lugar'] ?></td>
    <td><?php echo $mostrar['Fecha'] ?></td>
    <td><?php echo $mostrar['Hora'] ?></td>
    <td><?php echo $mostrar['IdAdmin'] ?></td>
    
</tr>
<?php  
}
?>
</table>

</body>
</html>
