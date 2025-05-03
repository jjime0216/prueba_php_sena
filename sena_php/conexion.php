<?php

    $mysqli = new mysqli("localhost","root","Colombia50*","sena_php");
    if($mysqli ->connect_error){
        die("Error en la conexion". $mysqli->connect_error);
    }
    ?>