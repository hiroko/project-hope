<?php

function text_randomizer() {

	$file = file_get_contents('texts.txt');
	$texts = explode("\n", $file);
	$total = count($texts);
	$n = rand(0, ($total - 1));

	echo $text = $texts[$n];

}

?>
