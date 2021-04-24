											<h1>Mileage in 2021</h1>
											
<table border=1>
<tr><th>Date</th><th>Mileage</th><th>Destination</th></tr>
<!--<tr><th>Date</th><th>Mileage</th><th>Distance</th><th>Destination</th></tr>-->
											
<?php
$row = 1; // line number
$b = 1;
$fmil[0] = 14175;
$fp = fopen ("mileage2021.txt","r");
if (!$fp) {
	echo "Нет данных за 2021 год!";
	exit;
}
while ($data = fgetcsv ($fp, 100, ";")) {
        $num = 2; // кол-во в строке 0 1 2
	//$num = count ($data);
	echo "<tr>";
	//echo "<tr><td>$row</td>";
	for ($c=0; $c<$num; $c++) {
	print "<td>" .$data[$c] . "</td>"; }
	$fmil[$b] = $data[1];
        $dmil[$b] = $fmil[$b] - $fmil[$b-1];
	$row++;   // increase the row counter
	echo "</tr>\n";
}
fclose ($fp);



//$fileopen=fopen("distance2021.txt", "a+");
//$write="19.04.21;14302;Yar Rio;\r\n";
//fwrite($fileopen,$write);
//fclose($fileopen);
?>
</table>
