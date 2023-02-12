<?php
class Basededatos {
    private $conexion;
    public $error; 

    function __construct ($servidor, $usuario, $contrasena, $base) {
        if(!$this-> __connect($servidor, $usuario, $contrasena, $base)) {
            $this->error = $this->conexion->connect_error;
        }
    }

    private function __connect ($servidor, $usuario, $contrasena, $base) {
        $this->conexion = new mysqli($servidor, $usuario, $contrasena, $base);
    }

    public function ejecutarConsultas($sql) {
        $tipo = strtoupper(substr($sql, 0,6));

        switch ($tipo) {
            case 'INSERT':
                $resultado = $this->conexion->query($sql);
                if(!$resultado) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    return $this->conexion->insert_id;
                }
                break;

                case 'SELECT':
                    $resultado = $this->conexion->query($sql);
                    $array_resultado = [];
                    if(!$resultado) {
                        $this->error = $this->conexion->error;
                        return false;
                    } else {
                        while($registro = $resultado->fetch_assoc()) {
                            $array_resultado[] = $registro;    
                        }
                        return $array_resultado;
                    }
                    break;

                case 'DELETE':
                    $resultado = $this->conexion->query($sql);
                    if(!$resultado) {
                        $this->error = $this->conexion->error;
                        return false;
                    } else {
                        return $this->conexion->affected_rows;
                    }
                    break;
                    
            default:
                $this->error = 'Consulta no válida';
                break;
        }
    }
}
?>