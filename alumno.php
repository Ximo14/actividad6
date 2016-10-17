<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alumno</title>
  </head>
  <body>
    <?php
      include 'claseAlumno.php';

      $alumno1 = new claseAlumno();
        $alumno1-> setNombre('Ximo');
        echo ''.$alumno1->getNombre();
        $alumno1-> setEdad(2);
        $alumno1-> setCurso(5);
        $alumno1-> setCiclo('Desarrollo de Aplicaciones Web');
        echo ''.$alumno1->getCiclo();
      ?>
  </body>
</html>
