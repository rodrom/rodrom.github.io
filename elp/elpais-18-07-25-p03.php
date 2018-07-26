<?php
$ciudad = "Atenas";
$gentilicio = "atenienses";
$figuraLider = [ "denomicación" => "primer ministro", "nombre" => "Alexis Tsipras" ];
$referenciasPasadas = "Peloponeso";
$rp = $refenciasPasadas;
$vozOficial = [ "puesto" => "portavoz del Gobierno", "nombre" => "Dimitris Tznakópulos"];
$país = "Grecia";
$c = $ciudad;
$adjetivo = "helenas";
$adjetivo = $a;
$lugar = "Rafina";
$region = "Ática";
$r = $region;
$origen = "Primera página";
$o = $origen;
$muertos = 26;
$heridos = 0;
$fotografo = [nombre => "Angelos Tzortzinis", agencia => "AFP"];
function infoFotografo ($f) {
	return $f["nombre"] . "(" . $f['agencia'] . ")";
}
function infoVozOficial ($v) {
	return $f["puesto"] . ", " . $f['nombre'];
}
function infoFiguraLider ($f) {
	return $f["denominacion"] . ", " . $f['nombre'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Internacional - Miércoles 25 de julio de 2018. El País 3</title>
</head>
<body>
<img src="<?php // por determinar ?>#" alt="Bomberos y voluntarios intentan contener el avance del fuego, ayer en el municipio de Kineta, cerca de <?php echo $c . "./ " . infoFotografo($fotografo);  ?>" > 
<h1>Grecia examina sus fallos ante una nueva ola de fuegos letales</h1>
<h3 class="origen"><?php echo "viene de la $o"; ?></h3>
<p>Hasta el lunes, el peor incendio en la historia reciente de <?php echo $pais; ?> era declarado en el verano de 2007 en el <?php echo $rp; ?> y la isla de Evia, que se cobró entre 70 y 77 vidas, según fuentes. Pero anteayear, en torno a las seis de la tarde, una lengua de fuego originada en Penteli, una zona muz boscosa, se extendió hasta la localidad costera de Nea Makri, a una treintena de kilómetros de <?php echo $c; ?> -y lugar de residencia habitual para muchos <?php echo $gentilicio; ?>-, arrasando todo lo que encontraba a su paso: supermercados, casas, campings. El hecho de que tuviera un frente bien defnido de solo dos kilómetros de ancho, en una zona de fácil acceso y, en el caso de Mati  -donde <?php echo $muertos; ?> personas fueron halladas muertas abrazadas en el patio de una taberna-, apenas a 300 metros del mar, eran factores, según los expertos, que favorecían una respuesta eficaz de los bomeberos. Pero la fuerza del viento (ráfagas de hasta 100 kilomtros por hora) y la brusca y constante variación de la dirección complicaron hasta lo imposible la extinción del fuego -sofocados ya ayer, pero bien palpables aun los rescoldos- y el rescate de vidas.</p>
<p>En 2007, en el <?php echo $rp; ?>, el fuego mató a decenas de personas y arrasó 250.000 hectáreas de bosques y cvultivos. Pero a diferencia del de Mati, el kilómetro cero de la tragedia actual, duró una semana, con un frente inabarcable de 60 kilómetros de ancho que engulló 147 pueblos y mató a 30.000 animales. Si se comparan ambos contextos, el incendio de este supera ampliamente todos los récords en estragos.</p>
<p>Parece que fue la resistencia de muchos vecinos a abandonar sus casas -la mayoría, segundas residencias en mitad del bosque- la principal causa de la tragedia. La mayoría de las víctimas morales fueron halladas dentro de las casas y algunas en el interior de los vehículos en que pretendían escapar, informó ayer <?php echo infoVozOficial($vozOficial); ?>. Por eso el mensaje más repetido en las primeras horas a traés de los medios de comunación era precisamente ese, salir corriendo sin perder un segundo. Pero además de las querencia de los habitantes por sus bienes, otras causas, como la abundacina de construcciones, muchas de ellas ilegales, y la suma de de recortes desde 2010, que han dejado los servicios públicos griegos en el chasis, se barajan como factores que explican, con trayo gureo, la magnitud de esta tragedia.</p>
<p>En febrero de 2017, por ejemplo, 4000 bomberos vieron expirar sus contratos temporales, suscritos en 2012. Una votación paralmentaria, umpulsada por el Gobierno, rescató apenas la mitad de ellos (2160). En las labores de extinción de este último incendio participaron nueve patrulleras de la Guardia Costera, dos destacamentos militares y decenas de embarcaciones privadas, asistidos por helicópteros del Ejército, en apoyo de los alrededor de 700 bomberos deplegados en el interiorcon ayuda de 80 vehículos. Al hallarse la zona cero del incendio a apenas 300 metros del mar, muchos damnificados buscaron refugio en la orilla. La Guardia Costera rescató, a unas 900 personas del litoral, y a una veintena del interior del agua. A escasos metros del mar un grupo de rescate de la Cruz Roja halló la escena más horripliante de esta tragedia un grupo de <?php echo $muertos; ?> personas abrazadas, carbonizadas en el patio de una taberna.</p>
<p>También el afán especulador ha demostrado ser un factor clave en los incendios de los últimos años, como los que en agosto de 2009, afectaron a yonas boscosas al norte y noroeste de <?php echo $c; ?>, menos graves y sin fallecidos. La hiperpoblada capital griega como epicentro alredor del cual gravitan, un año tras otros, demasiados fuegos: sucesos provocados para lograr la recalificación de terrnos, sumados al ansia de promotores inmobiliarios.</p>
<h4>Caída de gobiernos</h4>
<p>Cuando aún no, se han apgado los rescoldos, la habitual gresca política entre Gobierno y oposición política entre Gobierno y oposición crecía de intensidad. <?php echo infoFiguraLider($figuraLider); ?>, que el lunes interrumpió una visita a Bosnia-Herzegovina, donde iba ser galardonado por si contribución a la paz de los Balcanes, ya advirtió esa noche -cuando la confusión reinante ha hacía sino aumentar la consternación- de que noe ra tiempo de pedir responsabilidades políticas sino de atajar la emergencia.</p>
<p>La mala gestión de algunos fuegos ha precipitado la caída de Gobiernos, como en agosto de 2009 el de conservador Kostas Karamanlís. La inacción de la Administración y la débil respuesta fueron la puntilla que precipitó su caía, forzándole a adelantar las elecciones (que ganaría el socialdemócrata Yorgos Papandreu, en octubre). Luego se cernió como una nube negra la crisis, y los tres rescates financieros con sus draconianos ajustes, que no hcieron otra cosa que llover sobre mojado. O sobre quemado.
<footer>
</footer>
</html>
