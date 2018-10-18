<?php


$user = $_POST["user"];

?>
<form action="update2.php" method="POST">
User: <?php echo $user?>      
<input type='hidden' name='user' value="<?php $user ?>"><br>
Password:       
<input type='password' name='pass'><br>
      <input type='submit'  value='Update'>
</form>












 