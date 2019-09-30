<?php
if(isset($_GET['Email'])){
	$f=fopen('Subscripciones.txt','a');
	fwrite($f,$_GET['Email']."\r\n");
	fclose($f);
}
?>

<form>

	<input name="Email"/>
	<button> Suscribete </button>

</form>