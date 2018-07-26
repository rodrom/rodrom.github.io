<?php
$ciudad = "Atenas";
$país = "Grecia";
$c = $ciudad;
$adjetivo = "helenas";
$a = $adjetivo;
$lugar = "Rafina";
$region = "Ática";
$r = $region;
$periodista = [ "María Antonia Sánchez-Vallejo", "Enviada especial"];
$p = $periodista;
$columna = [ 
	// "autores" => "M. Castellnou / A. García Hernández",
	"M. Castellnou / A. García Hernández",
	// "contenido" => "<p>Los incendios forestales son cada veyz más grandes, más veloces y más intensos. Lo que la comunidad científica observó atónita en 2017 en diversos puntos del planeta es algo escalofriante hasta para los especialistas en la materia. Los incendios forestales de 2017 pusieron más cenizas en la atmósfera que espiramos que diez años de erupciones volcánicas. Las intensidades caloríficas emitidas por los incendios en Portugal fueron respectivamente 68 y 142 veces la de la bomba atómica de Hiroshima. Por primera vez, los bosques de Finaldia, Noruega, Suecia o Dinamarca están sufriendo las temperaturas y el estrés hídrico que hace posibles los grandes incendios, y la situación en el Mediterráneo es extrema."
	"<p>Los incendios forestales son cada veyz más grandes, más veloces y más intensos. Lo que la comunidad científica observó atónita en 2017 en diversos puntos del planeta es algo escalofriante hasta para los especialistas en la materia. Los incendios forestales de 2017 pusieron más cenizas en la atmósfera que espiramos que diez años de erupciones volcánicas. Las intensidades caloríficas emitidas por los incendios en Portugal fueron respectivamente 68 y 142 veces la de la bomba atómica de Hiroshima. Por primera vez, los bosques de Finaldia, Noruega, Suecia o Dinamarca están sufriendo las temperaturas y el estrés hídrico que hace posibles los grandes incendios, y la situación en el Mediterráneo es extrema.</p>",
	];
$muertos = 74;
$heridos = 180;
$citas = [ "para rastrear toda huella de actividad sospechosa"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Primera página-Noticia de portada</title>
</head>
<body>
<h1>Más de 70 muertos por el fuego a las puertas de <?php echo $c; ?></h1>
<h2>Las llamas se extendieron a enomre velocidad y sorprendieron a la población</h2>
<h3><?php echo $p[0] . " ". $p[1] . " <b>$lugar</b>"; ?></h3>
<p>La peor tragedia natural en la historia reciente de <?php echo $país; ?> ha dejado desde el lunes al menos <?php echo $muertos; ?> y al menos <?php echo $heridos; ?> tras el paso de una lengua de fuego por el norte y noroeste</body> del <pho echo $r; ?>, la región que rodea la capital griega. Todas las víctimas, entre las que hay adolescentes, niños e incluso un bebé de seis meses, han sido halladas en el área comprendida entre el puerto de Rafina, a unos 30 kilometros de <?php echo $c; ?>, y Nea Makri, unos diez kilómetros más al norte, con la zona cero localizada en Mati, una típica localidad balnearia muy frecuentada por visitantes locales y colonias escolares.</p>
<p>Las autoridades <?php echo $a; ?>, que han declarado el estado de emergencia y pedido ayuda sus socios europeos, sugieren que los incendios podrían haber sido provocados. También han solicitado un dron especial a EE.UU, “<php echo $citas[0]; ?>“̣-como la calificó ayer el portavoz del Gobierno de <php echo $c; ?>- al constatarse la existencia, en la tarde del lunes, de 15 focos de fuego simultáneos en tres frentes distintos del <php echo $r; ?>.</p>
<p><h1 class="opinion">Incendios como bombas atómicas</h1>
<?php /* <h3><php echo $columna["autores"]; ?></h3> */ ?>
<h3><?php echo $columna[0]; ?></h3>
<?php /* echo $columna["contenido"]; ?> */ ?>
<?php echo $columna[1]; ?>
<footer>
</footer>
</html>
