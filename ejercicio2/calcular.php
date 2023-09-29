<!-- Enrique Leon -->
<!-- 30.167.685 -->

<?php
session_start();

// Inicializamos variables
$aprobadosMatematicas = 0;
$aprobadosFisica = 0;
$aprobadosProgramacion = 0;
$aplazadosMatematicas = 0;
$aplazadosFisica = 0;
$aplazadosProgramacion = 0;
$aprobadosTodas = 0;
$aprobadosUna = 0;
$aprobadosDos = 0;

// N vendria siendo la variable del numero de estudiantes
$N = $_SESSION['numEstudiantes'];

for ($i = 0; $i < $N; $i++) {
    
    // Valores provenientes del formulario
    $A = $_POST['cedula'.$i];
    $B = $_POST['nombre'.$i];
    $C = $_POST['matematicas'.$i];
    $D = $_POST['fisica'.$i];
    $E = $_POST['programacion'.$i];

    // Calculamos aprobados y aplazados en cada materia
    if ($C >= 10) {
        $aprobadosMatematicas++;
    } else {
        $aplazadosMatematicas++;
    }

    if ($D >= 10) {
        $aprobadosFisica++;
    } else {
        $aplazadosFisica++;
    }

    if ($E >= 10) {
        $aprobadosProgramacion++;
    } else {
        $aplazadosProgramacion++;
    }

    // Calculamos aprobados en todas, una y dos materias
    $numAprobadas = ($C >= 10 ? 1 : 0) + ($D >= 10 ? 1 : 0) + ($E >= 10 ? 1 : 0);
    
    if ($numAprobadas == 3) {
        $aprobadosTodas++;
    } elseif ($numAprobadas == 2) {
        $aprobadosDos++;
    } elseif ($numAprobadas == 1) {
        $aprobadosUna++;
    }
}

// Resultados
echo "Número de alumnos aprobados en matemáticas: " . $aprobadosMatematicas . "<br>";
echo "Número de alumnos aplazados en matemáticas: " . $aplazadosMatematicas . "<br>";
echo "Número de alumnos aprobados en física: " . $aprobadosFisica . "<br>";
echo "Número de alumnos aplazados en física: " . $aplazadosFisica . "<br>";
echo "Número de alumnos aprobados en programación: " . $aprobadosProgramacion . "<br>";
echo "Número de alumnos aplazados en programación: " . $aplazadosProgramacion . "<br>";
echo "Número de alumnos que aprobaron todas las materias: " . $aprobadosTodas . "<br>";
echo "Número de alumnos que aprobaron una sola materia: " . $aprobadosUna . "<br>";
echo "Número de alumnos que aprobaron dos materias: " . $aprobadosDos . "<br>";
?>
