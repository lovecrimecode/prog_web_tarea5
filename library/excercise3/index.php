<?php

require_once(__DIR__ . '/../motor.php');

Template::apply();

$n3 = 3;
$excercise = get_excercise($n3);

if (!$excercise){
     echo '<h1 class="title">Ejercicio no encontrado</h1>

<p class="subtitle">El ejercicio que buscas no existe .< /p>

<a href="./">Volver al inicio</a>';

exit();
}

$excercise = (object) $excercise;

?>

<h1 class="title"><?php echo $excercise->name; ?></h1>
<h1 class="subtitle"><?php echo $excercise->description; ?></h1>

<form method="post" action="/library/excercise3/result3.php" target="result">
     <div class="field">
          <label class="label">Universidades por pais</label>
          <input class="input" type="text" name="country" placeholder="Pon el nombre del pais (en ingles) aqui" required>
     </div>
     <button class="button is-primary">Enviar</button>
</form>
<hr>
<iframe name="result" style="width: 100%; height: 350px;"></iframe>