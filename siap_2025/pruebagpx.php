<?php
$servername = "ciberpanel.com";
$username = "gscolomb_siap";
$password = "vpM.F^z=Dd95";
$dbname = "gscolomb_map_points";
$city = "Manizales";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Coneccion Fallida: " . $conn->connect_error);
}

$sql = "SELECT id, lat, lon, ele, tiempo, nombre_luminaria FROM puntos_prueba";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $city);
$stmt->execute();
$result = $stmt->get_result();
// echo $result;
?>

<H1 style align="center">Luminarias Neira ( Caldas )</H1>

<table width="870" border="1" align="center">
  <tbody>
    <tr>
      <th width="66" align="center">Id</th>
      <th width="168" align="center">Latitud</th>
      <th width="391" align="center">Longitud</th>
      <th width="111" align="center">Ele</th>
      <th width="100" align="center">Time</th>
      <th width="100" align="center">Nombre</th>
    </tr>
  </tbody>
</table>




&nbsp;

<?php
foreach ($result as $row) {
    ?>
	
<?php
    }
?>



<?php
foreach ($result as $row) {
    ?>




<table style="border: 0.5px solid #14C5E6" width="870" height="52" border="1" align="center">
	
  <tbody>
	  
    <tr>
      <td width="64"><?php echo $row['id'] ?></td>
      <td width="171"><?php echo $row['lat'] ?></td>
      <td width="390"><?php echo $row['lon'] ?></td>
      <td width="110"><?php echo $row['ele'] ?></td>
      <td width="101"><?php echo $row['tiempo'] ?></td>
      <td width="101"><?php echo $row['nombre_luminaria'] ?></td>
    </tr>
    
  </tbody>
</table>

<?php
    }
?>
