<?php
/*
    CONCEPTOS GENERALES :
        - Sobrescritura (metodos)
        -> mismo nombre con mismo numero de parametros, diferente comportamiento
            -> clase igura -> metodo calcular_area
            -> case circulo -> metodo calcular_area
            -> clase cuadrado -> metodo calcular_area

        -Sobrecarga (metodos)
        -> mismo nombre con diferente numero de parametros
        -Sobrecarga (construcciones)

        -Polimorfismo : objeto que se comporta como otro.
            - casting
            - sobrescitura
            -sobrecarga
            -ligadura dinamica

    PHP:
        - Si sobrescritura.
        - No existe sobrecarga
        - No hay sobrecarga constructores
        - Si hay polimorfismo (sobrescritura)
        - public, private, protected , por defecto public

    NOTACION:
        -Nombre clases : UpperCameCase (PAscalCase)
        -Nombre metodos : loweCameClase
        java : $this.attr
        php : $this->attr
*/


class Asignatura{
    private $nombre = null;
    private $numCreditos = null;
    private static $ciclo = null;

     public function __construct($nombre, $numcreditos)
     {
       $this->nombre = $nombre;
       $this->numCreditos  = $numcreditos;
     }

     function getNombre(){
         return $this->nombre;
     }

     function setNombre($nombre){
         $this->nombre = $nombre;
     }

     function getNumeroCreditos(){
         return $this->numCreditos;
     }

     function setNumeroCreditos($numcredit){
         $this->numcreditos = $numcredit;
     }

     static function getCiclo(){
        return self::$ciclo;
    }

    static function setCiclo($nomciclo){
        self::$ciclo = $nomciclo;
    }

     function __toString()
     {
         return "<br><b>Datos de la asignatura :</b><br>"
         . "<br>Nombre asignatura : " . $this->nombre
         . "<br>Numero de créditos : " . $this->numCreditos;
     }



}//fin clase
?>