<?php

//creo una clase usuarios

class Usuarios {
    
    //establezco las propiedades nombre, apellido y fecha de nacimiento

    public $nombre;
    public $apellido;
    public $fecha_nacimiento;

    //defino la función constructor y paso los 3 parametros indicados

    function __construct($nom, $ape, $fnac){
        $this-> nombre = $nom;
        $this-> apellido = $ape;
        $this-> fecha_nacimiento = $fnac;
    }

    //creo una función para calcular la edad

    private function calcular_edad(){

        //defino la zona horaria para tomar la fecha del servidor

        date_default_timezone_set("America/Argentina/Buenos_Aires");
        
        //guardo en variable la fecha para calcular la edad: fecha actual

		$fecha_actual = date("Y-m-d");

        // genero el calculo: fecha actual - fecha de nacimiento

		$años = strtotime($fecha_actual)-strtotime($this->fecha_nacimiento);

        //el resultado lo paso a años
        
		$edad = intval($años/31536000);
        
        //devuelvo el valor final

        return $edad;
    }

    //genero una función para imprimir las caracteristicas

    public function imprime_caracteristicas(){

        //imprimo las caracteristicas básicas

        echo "<h4>Nombre</h4>".$this->nombre;
        echo "<h4>Apellido</h4>".$this->apellido;
        echo "<h4>Fecha de nacimiento</h4>".$this->fecha_nacimiento;

        //guardo en una variable la edad del usuario (proviene de la función del calculo de edad)

        $edad_usuario = $this->calcular_edad();

        //imprimo la edad

		echo("<h4>Edad</h4>".$edad_usuario." años.");
    }
}
?>