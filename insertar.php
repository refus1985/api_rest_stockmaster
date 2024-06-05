<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';

    $sku = $_POST["sku"];
    $Descripcion = $_POST["Descripcion"];
    $IdCategoria = $_POST["IdCategoria"];
    $Stock = $_POST["Stock"];
    $IdProveedor = $_POST["IdProveedor"];

    $query="INSERT INTO Articulos (sku, Descripcion, IdCategoria, Stock, IdProveedor) 
    VALUES('".$sku."','".$Descripcion."','".$IdCategoria."','".$Stock."','".$IdProveedor."')";

    $resultado=$mysql->query($query);
    if($resultado==true){
        echo "El usuario se inserto de forma exitosa";
    }else{
        echo "Error al insertar el usuario";
    }
}