<?php
	$cn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=sukaduka2020");
	$result = pg_query($cn,"select * from tb_vip");
	while ($row = pg_fetch_object($result)) 
	{
		echo "</br> </br> <hr> ".$row->no_kamar_vip;
		echo "\n".$row->harga_kamar;
	}
		
	pg_close($cn);

	

?>