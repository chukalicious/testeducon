<?php
/*
Bei der for-Schleife wird der Schleifenrumpf mehrfach durchlaufen,
die Anzahl der Durchl�ufe mu� vorher bekannt sein
*/

// $i erh�lt bei jedem Durchlauf einen anderen Wert

for ($i = 0; $i < 10; $i++){
	// Bedeutung der Angaben in der Klammer
	// $i = 0; Startwert
	// $i < 10; Abbruchbedingung
	// $i++; $i nach jeweiligem Durchlauf um 1 erh�hen
	echo $i; // <--Schleifenrumpf
}

/*																	Wert von $i
1. 	Durchlauf:	$i auf 0 setzen							$i = 0;		0
	�berpr�fen, ob $i kleiner als 10 ist (ist richtig)	$i < 10;	0
	Schleifenrumpf ausf�hren (Ausgabe: 0)							0
	$i um 1 erh�hen, damit ist $i gleich 1.				$i++		1

2.	�berpr�fen, ob $i kleiner als 10 ist (ist richtig)	$i < 10		1
	Schleifenrumpf ausf�hren (Ausgabe: 1)							1
	$i um 1 erh�hen, damit ist $i gleich 2.				$i++		2

3.	�berpr�fen, ob $i kleiner als 10 ist (ist richtig)	$i < 10		2
	Schleifenrumpf ausf�hren (Ausgabe: 2)							2
	$i um 1 erh�hen, damit ist $i gleich 3.				$i++		3

und so weiter

9.	�berpr�fen, ob $i kleiner als 10 ist (ist richtig)	$i < 10		8
	Schleifenrumpf ausf�hren (Ausgabe: 8)							8
	$i um 1 erh�hen, damit ist $i gleich 9.				$i++		9

10.	�berpr�fen, ob $i kleiner als 10 ist (ist richtig)	$i < 10		9
	Schleifenrumpf ausf�hren (Ausgabe: 9)							9
	$i um 1 erh�hen, damit ist $i gleich 10.			$i++		10

11. �berpr�fen, ob $i kleiner als 10 ist (ist falsch)	$i < 10		10
	Schleife beenden.

Als Gesamtausgabe ergibt sich:

0123456789


*/

?>