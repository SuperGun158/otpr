<?php 
 echo $_POST['email'];
 echo $_POST['login'];
 echo $_POST['password'];
 mail($_POST['email'], $_POST['login'], $_POST['password'])
?>