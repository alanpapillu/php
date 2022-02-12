<?php

ini_set('display error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Persona {
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setDni($dni){ $this->dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setEdad($edad){ $this->edad; }
    public function getEdad($edad){ return $this->edad; }

    public function setNacionalidad($nacionalidad){ $this->nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }

    public function imprimir(){

    }
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPHP;
    public $notaProyecto;


    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPHP = 0.0;
        $this->notaProyecto = 0.0;
    }
    public function imprimir(){

    }
    public function calcularPromedio($num1){

    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir(){

    }

    public function imprimirEspecialidadesHabilitadas(){

    }
}


//Programa

$alumno1 = new Alumno();
$alumno1->setNombre("Juan Gonzales");
$alumno1->setEdad(25);
$alumno1->setNacionalidad("argentino");
$alumno1->notaPHP = 8;
$alumno1->notaPortfolio = 7;
$alumno1->notaProyecto = 9;
echo "El nombre es " . $alumno1->getNombre();
$alumno1->imprimir();


$alumno2 = new Alumno();
$alumno2->setNombre("Belén Perez");
$alumno2-setEdad(30);
$alumno2->notaPHP = 8;
$alumno2->notaPortfolio = 9;
$alumno2->notaProyecto = 7;

$alumno2->imprimir();
?>
