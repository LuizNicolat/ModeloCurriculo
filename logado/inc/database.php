<?php
include "config.php";

function open_database() {
        try {
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            //return $conn;
            //echo "1";
        } catch (Exception $e) {
            echo $e->getMessage();
            //return null;
            //echo "0";
        }
    }
    function close_database($conn) {
        try {
            mysqli_close($conn);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      }
?>
