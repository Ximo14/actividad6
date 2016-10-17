<?php

/**
 *Ejercico hecho by Ximo Gil
 */
class claseAlumno
{

//Declaracion de un atributo
  public $nombre='';
  public $edad='';
  public $curso='';
  public $ciclo='';

//Declaracion de un metodo

  //Getters
  
 public function getNombre(){
  return $this->nombre;
 }

 public function getEdad(){
   return $this->edad;
 }

 public function getCurso(){
   return $this->curso;
 }
 public function getCiclo(){
   return $this->ciclo;
}
   //Setters

  public function setNombre($nuevoNombre){
    $this->nombre=$nuevoNombre;
  }

  public function setEdad($nuevaEdad){
    $this->edad=$nuevaEdad;

    if ($nuevaEdad>=18){
      echo "<br>La edad es igual o mayor que 18 años";
    }
    elseif ($nuevaEdad<18){
      echo "<br>Es menor de 18 por lo que la edad se establece en Edad = ";
      echo $this->nuevaEdad=18;
    }

  }

  public function setCurso($nuevoCurso){
    $this->curso=$nuevoCurso;

    if ($nuevoCurso==1){
      echo "<br>Estas en el primer curso";
    }
    elseif ($nuevoCurso==2){
      echo "<br>Estas en el segundo curso";
    }

    elseif ($nuevoCurso!=1 or 2){
      echo "<br> Esta en un curso que no es ni el primero ni segundo por lo que Curso = ";
      echo $this->nuevoCurso=1;
    }
  }


  public function setCiclo($nuevoCiclo){
    echo '<br>';
    $this->ciclo=$nuevoCiclo;
  }

}

 ?>
