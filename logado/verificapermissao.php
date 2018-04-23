<?php
session_start();
if ($_SESSION["permissao"] == 0) {
  header("Location:indexadmin.php");
} else if ($_SESSION["permissao"] == 1) {
    header("Location:indexuser.php");
}
?>
