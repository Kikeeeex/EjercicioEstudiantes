<!-- Enrique Leon -->
<!-- 30.167.685 -->

<?php
session_start();

$numEstudiantes = $_POST['numEstudiantes'];
$_SESSION['numEstudiantes'] = $numEstudiantes;

for ($i = 0; $i < $numEstudiantes; $i++) {
    echo '<h2>Estudiante #' . ($i + 1) . '</h2>';
    echo '
    <form action="calcular.php" method="post">
      <label for="cedula'.$i.'">Cédula:</label><br>
      <input type="number" id="cedula'.$i.'" name="cedula'.$i.'" required><br>
      <label for="nombre'.$i.'">Nombre:</label><br>
      <input type="text" id="nombre'.$i.'" name="nombre'.$i.'" required><br>
      <label for="matematicas'.$i.'">Nota de matemáticas:</label><br>
      <input type="number" id="matematicas'.$i.'" name="matematicas'.$i.'" min="0" max="20" required><br>
      <label for="fisica'.$i.'">Nota de física:</label><br>
      <input type="number" id="fisica'.$i.'" name="fisica'.$i.'" min="0" max="20" required><br>
      <label for="programacion'.$i.'">Nota de programación:</label><br>
      <input type="number" id="programacion'.$i.'" name="programacion'.$i.'" min="0" max="20" required><br>
    ';
}

echo '<input type="submit" value="Enviar">';
echo '</form>';
?>
