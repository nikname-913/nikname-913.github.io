<?php

function main() {

	$a = htmlspecialchars($_GET['mail']);
	$b = htmlspecialchars($_GET['mes']);

	// шлем письмо

	file_get_contents("http://itex-clients.ru/dop-files/mailOne.php?mail=".$a."&mes=".$b."&sub=order");

}

main();