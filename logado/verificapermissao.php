<?php
include "../inc/functions.php";

$resultpermit = pegapermissao($_SESSION["usuario"]);

session_start();
if ($resultpermit == 0) {
  header("Location:indexadmin.php");
} else if ($resultpermit == 1) {
    header("Location:indexuser.php");
}
?>
