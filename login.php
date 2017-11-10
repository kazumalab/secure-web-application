<?php
  $id = @$_POST['id'];
  $password = @$_POST['password'];
  // TODO: Write database connection function
  $sql = "select * from users where id = '$id' and password = '$password'";
  // TODO: function query
?>
