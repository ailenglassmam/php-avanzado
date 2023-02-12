<?php

class Carrito {
    private $bd;
    
    function __construct($base) {
        $this->bd = $base;
    }

    public function  introducir_compra($codigo, $producto, $descripcion, $precio) {
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, '$codigo', '$producto', '$descripcion', '$precio')");
        return $respuesta;
    }

    public function eliminar_compra($codigo) {
        $respuesta = $this->bd->ejecutarConsultas("DELETE FROM compras WHERE codigo = $codigo");
        return $respuesta;
    }

    public function listar_compra() {
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras");
        return $respuesta;
    }

}
?>