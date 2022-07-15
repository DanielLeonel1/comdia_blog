<?php
session_start();
 unset($_SESSION['id_usuario']);
  unset($_SESSION['usu_correo']);


session_destroy();

if ($tipo == 1) {
    header('Location: ../');
  }

header('Location: ../');


 

?>