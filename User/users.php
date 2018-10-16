<?php

$conn = new mysqli("localhost:3307", "root", "", "apliweb");

if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
//echo "Conexion Exitosa <br>";



$query = "SELECT User from users";
$result = mysqli_query($conn, $query);

while($line = mysqli_fetch_array($result)){
    //echo $line[0].":<br>";

?>
    <?php echo $line[0] ?>:
    <form action="delete.php" method="POST">
      <input type='hidden' name='user' value="<?php echo $line[0] ?>">
      <input type='submit'  value='Delete'>
    </form>
    <form action="modify.php" method="POST">
      <input type='hidden' name='user' value="<?php echo $line[0] ?>">
      <input type='submit'  value='Modify'>
    </form><br>

<?php
}