<?php
$ciudad = "Atenas";
$país = "Grecia";
$organismoReligioso = [ "nombre" => "Cruz Roja", "representante" => "Vicki Konstantinidu"];
$oR = $organismoReligioso;
$c = $ciudad;
$adjetivo = "helenas";
$a = $adjetivo;
$protagonista = "Betsy Papadopulos";
$secundaria = "Anastasia";
$se = $secundaria;
$pr = $protagonista;
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
$muertos = 26;
$heridos = 180;
$citas = [ 
	"El fuego lo ha arrasado todo alrededor, todo: un viejo cámping al borde del mar, las típicas tabernas que abren solo en temporada alta, coches, casas... Algunas e han salvado, como la mía, pero no encuentro a mi gata... pobrecilla",
	"Por fuera es un desastre, está todo quemado y arrasado, pero el interior se ha conservado bastante bien, incluidos los muebles. Y los daños por fuera son subsanables con el tiempo y algo de esfuerzo, no se puede decir lo mismo de otros vecinos",
	"Fue una visión estremecedora, de la que aún no se han recuperado",
	"Estaban todos en una taberna al lado del mar, en una celebración familiar por lo que parece. Aguantorn dentro del establecimiento hasta que se vieron cercados por las llmas. No pudieron siquiera llegar al mar, a escasos metros del patio donde les alcanzó el fuego",
	"Alrededor de 150 personas que hemos albergado en un polideportivo de Rafina",
	"Hay peticiones para donar sangre, pero la respuesta de la ciudadanía no puede ser mejor: han llegado voluntarios de todas partes, muchos de ellos trayendo mantas y alimentos y agua. Esa es la demanda principal ahora, todos lo demás está en manos de Aristóteles."
];
$fotografo = [nombre => "Costas Baltas", agencia => "Reuters"];
function infoFotografo ($f) {
	return $f["nombre"] . "(" . $f['agencia'] . ")";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Internacional - Miércoles 25 de julio de 2018. El País 4</title>
</head>
<body>
<h2 class="sobretitulo">Un equipo de <?php echo $oR["nombre"]; ?>  halla los cuerpos carbonizados de <?php echo muertos; ?> en el patio de una taberna a pocos metros del mar, que no lograron alcanzar por la velocidad del incendio</h2> 
<h1>Los cadáveres abrazados en la Pompeya del <?php echo $region; ?></h1>
<h3><?php echo $p[0] . " ". $p[1] . " <b>$lugar</b>"; ?></h3>
<p>A <?php echo $pr; ?>  le han sonreído la suerte, aunqe a su alrededor todo sean árboles y coches carbonizados y un olor a quemado tan penetrante y agudo como el azufre. Cuando empezó el fuego, a las seis de la tarde del lunes, estaba haciendo unos recados fuera de su casa, ubicada kinto a una de las playas de Mati, la zona cero de la tragedia, y al regresar a ella, en la madrugada de ayer, solo echó en falta a su gata. El otro felino de la familia, con el pelaje chamuscado, se había refugiado en el interior, asustado. <?php echo $citas[0]; ?>.</p>
<p>El incesante paso de los servicios de bomberos y protectcción civil, además de la <?php echo $oR["nombre"]; ?> y cientos de voluntarios llegados de todas partes de <?php echo $p; ?> convertía ayer el tránsito por las callejuelas de esta localidad balnearia, a una treintena de kilómetros de <?php echo $c; ?>, en una suerreal yincana: los rescoldos del fuego aún humeaban entre árboles calcinados, retorcidos como espantajos, y carcasas de lo que una vez fueron coches. El <i>camping</i> al que aludía <?php echo $pr; ?> era una demostración del horror: fundido en negro, contrastaba con el azul insultante del mar Egeo, ajeno en apariencia a la tragedia. Azules eran también las mascarillas que portaban <?php echo $se; ?>  y un grupo de amigas, que evaluaban los daños en la vivienda de su familia, un hermoso chalé de dos plantas con las verjas y la fachada lamidas por el fuego. "<?php echo $citas[1]; ?>.</p>
<h4>Heridos evacuados</h4>
<p><?php echo $se; ?>  se refería al grupo de <?php echo $muertos; ?> personas que, como los muertos cubiertos de lava de Pompeya, hallaronla muerte abrazadaos, en el patio de una taberna a unos pocos metros de la orilla del mar. Se los encontró un grupo de <?php echo $oR; ?> a primera hora de ayer. “<?php echo $citas[2]; ?>”, explica a las puertas del Ayuntamiento de <?php echo $region; ?> -que coordina con la organización de primeros auxilios de origen católico- <?php echo $oR["representante"]; ?> , vicepresidenta de la <?php echo $oR; ?> griega.</p>
<p>“<?php echo $citas[3]; ?>”, prosigue <?php echo $oR["representante"]; ?>. El fuego engulló un millar de casas alrededor, algunas de ellas afortunadamente vacías pese a la alta ocupación en esta época del año.</p>
<p><?php echo $oR["representante"]; ?> coordinaba ayer las labores de atención a los desplazados. “<?php echo citas[4]; ?>”, explicó. Los heridos, algunos de ellos en estado muy grave, fueron evacuados a hospitales de Atenas. “<?php echo citas[5]; ?>”.</p>
<img src="<?php // por determinar ?>#" alt="<?php echo "Una mujer rodeada de vehículos quemados, ayer en la localidad de Mati" . "./ " . infoFotografo($fotografo);  ?>">
<div class="infoAdiciona">
	<h1>Tres de los fuegos más mortifieros</h1>
	<ul>
		<li><b>Portugal.</b> El fuego que se desató en junio de 2017 en Pedróg~ao Grande (Centro del país) se saldó con la muerte de 70 personas, muchas de las cuales fallecieron atrapadas en sus vehículos mientras trataban de escapar por carretera.</li>
		<li><b>Rusia.</b> En 2015, 34 personas murieron en unos gigantescos incendios que devastaron a mediados de abril 10.000 kilómetros cuadrados en Siberia.</li>
		<li><b>Grecia.</b> En 2007, al menos 77 personas fallecieron por los estragos causados por las llamas que asolaron 250.000 hectáreas en el Peloponeso (en el sur del país) y en la isla de Evia (al noreste de <?php echo $c; ?></php>, la capital).</li>
	</ul>
</div>
<footer>
	<h2>Opinión</h2>
	<h1><i>La mecha se encendió hace años</i></h1>
	<h3>Gabriela Cañas</h3>
	<p>Hasta hace un par de años, Grecia no disponía de castastro, así que los límites entre las zonas forestales, las agrícolas y las residenciales no estaban definidos.
	Era la istuación ideal para prender el fuego y , a continuación construir varias viviendas. Hace 11 años, en varios incendios simúltaneos, como ahora, en el Peloponeso murieron 77 personas. Cinco fueron condeandos a diez años de prisión por causar tan graves daños.</p>
	<p>Hoy za no se puede culpar a las especulación urbanística como entonces, aunque es posible que sigan estando detrás de los devastadores incendios de ahora. POrque es verdad que las temperatuas han sido altísimas estos días y que el fuerte viento ha propagado las llamas a una velcidad insuitada, pero 16 primeraos focos sumultaneos es una cicruncstancia que la fiscalia griega encuentra altamente sospechosa, sobre todo si se tiene en cuenta que, en general, entre el 80% y el 90% de los incendios sueler ser intencionados.</p>
	<p>La tragedia que esta viviendo Grecia resulta demsaiado familiar en los paises europeos del sur. Pero en loq ue va de siglo solo las llamas del veranos pasado en Portugual causaron tantos muertos como ahora en Grefcia. Y la explicacion se puede hallar en las condicones climaticas (y la ausencia de lucha contra el cambio climatico), pero tambien en aquellaa ausencia de catastaro, que ha transformado el paisaje de este turistico pais. Se ha construido en clauier parte, entre bosuqes, por ejemplo. Y aqui en de nuevo hay que vover la vista atras enun pais intervendio por la union europea y que al que se ha impuesotos undos drasticos recortes de gasto, lo que incluye el presupuesto para apagar incendios, pero tambien para prevenirlo con medios y personas suficinetes. Es dificl establecer una relacion deirecta entre prevencion e indencios finalmente desatos, pero pero los experos saben bien qué tipo de dtrreno son los mas propensos a sufirr estas devastaodras plgas que convierten idilicos paraisos en un inferno letal en el que la gente pierde la vida o, como mínimo, la hacienda.</p>
	<p>Los necesarios ajustes presupuestos han obligado a recortar hasta 4 veces las pensiones de los griegos y los ingresos de los hogares han disminuido en casi un 40% desde 2010. El estado se ha reducido con la venta de bienes públicos y el pago de la ingente deuda. Pero Grecia se dispone a recuperar sus soberanía dentro de un mes. Los incendios que estan asolando la zona de Atenas estan empañando lo que debía ser el final feliz de la troika. Pero las llamas vienen al tiempo con la macabra virtud de recordar que llevará muchos años reosolver los problemas endémicos del país. Se ha heredado un paisaje demasiado vulenrable al fuego y ni siquiera se cuenta con los medios adecuados para afrontarlo. Varios paises europeos, ademas de la Comision, estan ayudando. Es una prueba de solidaridad, pero mejor hubiera sido no necesitarla.</p>
</footer>
</html>
