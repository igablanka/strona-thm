<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Sklep muzyczny</title>
    <link rel="stylesheet" type="text/css" href="muzyka.css" />
</head>
<body>
<section id="baner">
    <h1>SKLEP MUZYCZNY</h1>
</section>
<section id="lewy">
    <h2>NASZA OFERTA</h2>
    <ol>
        <li>Instrumenty muzyczne</li>
        <li>Sprzęt audio</li>
        <li>Płyty CD</li>
    </ol>
</section>
<section id="prawy">
	<?php

	$imie =$_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$adres = $_POST['adres'];
	$telefon = $_POST['telefon'];

	$login = $_POST['login'];
	$haslo = $_POST['haslo'];


	echo 'Konto' . $_POST['imie'] . $POST['nazwisko']. 'zostalo zarejestrowane w sklepie muzycnym';

	$connect = mysqli_connect('localhost', 'root', '', 'sklep');

	mysqli_query($connect, "INSERT INTO `Uzytkownicy` (`imie`, `nazwisko`, `adres`, `telefon`) VALUES ( ' " . $imie . " ' , ' " . $nazwisko . " ' "." ' " . $adres . "'"." ' " . $telefon . "');");

	mysqli_query($connect, "INSERT INTO `Kontakt` (`login`, `haslo`) VALUES ( ' " . $login . "'" . " ' " . $haslo . "');");

	mysql_close($connect);
	
	
	$abc = 'aqwe';
	
	$zxc = '$abc'; // $abc
	$zxc = "$abc"; // qwe
	
	?>

</section>
</body>
</html>
