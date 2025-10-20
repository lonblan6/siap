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

$sql = "SELECT id, name, description, latitude, longitude FROM points WHERE city = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $city);
$stmt->execute();
$result = $stmt->get_result();
// echo $result;
?>

<H1 style align="center">Luminarias Manizales</H1>

<table width="870" border="1" align="center">
  <tbody>
    <tr>
      <th width="66" align="center">Id</th>
      <th width="168" align="center">Nombre</th>
      <th width="391" align="center">Descripción</th>
      <th width="111" align="center">Latitud</th>
      <th width="100" align="center">Longitud</th>
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
      <td width="171"><?php echo $row['name'] ?></td>
      <td width="390"><?php echo $row['description'] ?></td>
      <td width="110"><?php echo $row['latitude'] ?></td>
      <td width="101"><?php echo $row['longitude'] ?></td>
    </tr>
    
  </tbody>
</table>

<?php
    }
?>
