<?php
if(isset($_POST['mes']) && isset($_POST['anho']) && isset($_POST['ruta'])) {
    $mes=$_POST['mes'];
    $anho=$_POST['anho'];
    $ruta=$_POST['ruta'];
}
$parametros = array('mes' => $mes, 'anho' => $anho, 'ruta' => $ruta);


$primerdia = mktime(0,1,0,$mes,1,$anho);
$dias_mes = date("t",$primerdia);
$primerdia = date("w",$primerdia);

$c_header = array(
    'Host: avail.machupicchuperu.org',
    'Connection: keep-alive',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: es,en-US;q=0.9,en;q=0.8'   
);

$ch = curl_init('http://avail.machupicchuperu.org/source/disponibilidad.php');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);
$result=json_decode(curl_exec($ch),true);

$espacios = $result;
function ikdia($dia, $esp) {
	if ($esp==0)
		$capacidad=0;
	else
		$capacidad=$esp[$dia];
	$classextra='';
	$style='';
	if($capacidad<500) {
		$style=' style="width:'.($capacidad*100/500).'%"';
	}
	if($capacidad<=50){
		$classextra=' ikalert';
		if($capacidad==0){
			$classextra=' ikgris';
		}
	}
	$cadena1='<div class="iktd"><div class="ikbox'.$classextra.'"><div class="iknum">';
	$cadena2='</div><div class="ikespacios">'.$capacidad.' </div><div class="ikcounter"><div'.$style.'></div></div></div></div>'."\r\n";
	return $cadena1.$dia.$cadena2;
}

?>

<div class="ikcontenedor">
	<div class="ikcalendar">
		<div class="ikrow ikheader">
			<div class="iktd"><div class="ikbox">DOM</div></div>
			<div class="iktd"><div class="ikbox">LUN</div></div>
			<div class="iktd"><div class="ikbox">MAR</div></div>
			<div class="iktd"><div class="ikbox">MIE</div></div>
			<div class="iktd"><div class="ikbox">JUE</div></div>
			<div class="iktd"><div class="ikbox">VIE</div></div>
			<div class="iktd"><div class="ikbox">SAB</div></div>
		</div>
		<?php
		$totalCells = $primerdia + $dias_mes;
		if($totalCells < 36){
			$rowNumber = 5;
		} else {
			$rowNumber = 6;
		}
		$dayNumber = 1;
		for($currentRow=1; $currentRow <= $rowNumber; $currentRow++){
			if($currentRow == 1){
				?>
				<div class="ikrow">

					<?php
					for($currentCell  = 0; $currentCell<7; $currentCell++){
						if($currentCell == $primerdia){
							echo ikdia($dayNumber, $espacios);
							$dayNumber++;
						} else {
							if($dayNumber > 1){
								echo ikdia($dayNumber, $espacios);
								$dayNumber++;
							} else {
								echo '<div class="iktd">&nbsp;</div>'."\r\n";
							}
						}
					}
					?>

				</div>
				<?php
			} else {
				# Create Remaining Rows
				?>
				<div class="ikrow">

					<?php
					for($currentCell = 0; $currentCell < 7; $currentCell++){
						if($dayNumber > $dias_mes){
							# Days in month exceeded so display blank cell
							echo '<div class="iktd">&nbsp;</div>'."\r\n";
						} else {
							echo ikdia($dayNumber, $espacios);
							$dayNumber++;
						}
					}
					?>

				</div>
				<?php
			}
		}
		?>

	</div>
</div>
