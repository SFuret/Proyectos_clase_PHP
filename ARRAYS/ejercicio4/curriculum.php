<?php 
$curriculum_es = "Conocimientos: PHP, JavaScript, HTML, CSS \n Idiomas: Español, Inglés";
$curriculum_en="Knowledge: PHP, JavaScript, HTML, CSS \n Languages: Spanish, English";

$idioma = "en";  // Cambia a 'en' para inglés

$curriculum = "curriculum_" . $idioma;
// Mostrar el currículum en dependencia del idioma
echo $$curriculum;

?>