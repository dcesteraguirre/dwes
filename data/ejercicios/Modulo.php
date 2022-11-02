<?php

    /*
        - interfaces, clases abstract
        -objetos
        - polimorfismo : sobreescriturs de metodos
        - sobrecargar construcores ? -> No
        - sobrecargar constructores ? -> No
        - herencia unica -> extends
        - invocar "algo" del padre: parent::
        - $this -> metodo
        - $this -> atribute 
        - static contador:
            -> acceso a elemento estatico dentro de la clase self::
            -> pertenece a la clase no al objeto.
    */




    class Modulo extends Asignatura{
        private $codigo = null;

        function __construct($nombre, $numerocreditos, $codigo)
        {
            parent::__construct($nombre,$numerocreditos);
            $this->codigo = $codigo;
        }

        function getCodigo(){
            return $this->codigo;
        }

        function setCodigo($nuevocod){
            $this->codigo = $nuevocod;
        }

        function __toString()
        {
            return "<br><b>Datos del MODULO : </b><br>"
            . "<br>Nombre del modulo : " . $this->getNombre()
            . "<br> Numero creditos: " . $this->getNumeroCreditos()
            . "<br> Codigo del modulo: " . $this->codigo;
        }
    }//fin clase