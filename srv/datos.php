<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";

devuelveJson([
 "nombre" => ["value" => "Erick Orlando"],
 "apellido" => ["value" => "Elizalde Vera"],
 "sexo" => ["value" => "M"],
 "edad" => ["valueAsNumber" => 20],
 "servicio_medico" => ["value" => true],
 "promedio" => ["valueAsNumber" => 9],
 "direccion" => ["textContent" => "Girasoles 23\ncolonia Rosales"],
 "resultados" => ["innerHTML" => "<em>Alumno: <strong>Aprobado</strong>"],
 "nacimiento" => ["value" => "2005-12-21"],
 "imagen1" => [
  "src" => "https://gilpgawoas.github.io/img/icono/maskable_icon_x48.png"
  
 ],

 "idiomas[]" => ["Ing"],
 "beca" => ["no"],
 "alumnos[]" => ["c1", "c3"],
]);
