<?php

	pdfdoc = "test.pdf";

	$b64Doc = chunk_split(base64_encode(file_get_contents($this->pdfdoc)));

	header('Content-Type: application/json');
	echo ($b64Doc);


?>
