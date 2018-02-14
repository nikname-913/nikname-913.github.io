<?php

function main() {

	$mail = htmlspecialchars($_GET['mail']);
	$sub = htmlspecialchars($_GET['sub']);
	$mess = htmlspecialchars($_GET['mess']);

	$to = 'nik.shipov@yandex.ru';

	mail($to, $sub, $mess);

}

main();