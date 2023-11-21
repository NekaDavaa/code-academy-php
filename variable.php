<?php

function convertTemp($cels) {
	$cels = intval($cels);
	$convert = ($cels * 9/5) + 32;
	return $convert;
}

echo convertTemp(25);
