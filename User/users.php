<?php

$conn = new mysqli("localhost:3307", "root", "", "apliweb");

if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
//echo "Conexion Exitosa <br>";



$query = "SELECT User from users";
$result = mysqli_query($conn, $query);
echo "<table border='5px solid black'>";
while($line = mysqli_fetch_array($result)){
    //echo $line[0].":<br>";

?>
    
    <tr><td><?php echo $line[0] ?>:</td>
    <td><form action="delete.php" method="POST">
      <input type='hidden' name='user' value="<?php echo $line[0] ?>">
      <input type='submit'  value='Delete'>
    </form></td>
    <td><form action="update.php" method="POST">
      <input type='hidden' name='user' value="<?php echo $line[0] ?>">
      <input type='submit'  value='Update'>
    </form></td></tr>

<?php
}

echo "</table>";