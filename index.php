<?php
$dir = ''; // DECLARACION DE VARIABLE
$lang = @$_GET['lang']; // ASIGNACION DE IDIOMA ''(NATIVO) O 'ES'

if($lang == '') { // VALIDACION DEL IDIOMA
	include('lang/lang_en.php'); // INCLUSION DEL IDIOMA NATIVO
} else if($lang == 'es') {
	include('lang/lang_es.php'); // INCLUSION DEL IDIOMA ESPAÑOL
}

if(isset($_GET['lang'])) { // VALIDACION DEL CONTENIDO
	$dir.='../'; // ASIGNACION DE RUTA
}

$lang_en = (empty($_GET['lang'])) ? $dir.'translate/' : $dir.'translate/'; // JUEGO DE DIRECTORIOS CON EL IDIOMA NATIVO
?>

<meta charset="utf-8">
<a href="<?php echo $lang_en; ?>">Ingles</a> | <a href="<?php echo $dir.'translate/es'; ?>">Español</a>
<?php echo "<br><br>".tittle." <br>".description." <br>".neighborhood; // TRADUCCIONES ?>
