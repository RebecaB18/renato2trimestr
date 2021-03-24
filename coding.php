<?php
  $cidade=$_POST['cidade'];
  $r=fopen("violencia-domestica-df.csv","r");
  $dds=fgetcsv($r);
    while($dds)
	{
		if(($dds[0]==$cidade))
		{
            echo "<p>";
            echo $dds[0];
            echo "</p>";
            echo "<p>";
            echo $dds[1];
            echo "</p>";
            echo "<p>";
            echo $dds[2];
            echo "</p>";
            echo "<p>";
            echo $dds[3];
            echo "</p>";
            echo "<p>";
            echo $dds[4];
            echo "</p>";
            echo "<p>";
            echo $dds[5];
            echo "</p>";
            echo "<p>";
            echo $dds[6];
            echo "</p>";
		}
		$dds=fgetcsv($r);
	}
	fclose($r);
?>p
<h1> ano</h1>
<form action="coding.php" method="post"> 
   <p>Ano <input type="text" name="cidade" placeholder="cidade" /></p>
   <p><button type="submit">Envia</button></p>
</form>