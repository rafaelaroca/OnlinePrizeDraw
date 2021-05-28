<html>
<link rel="stylesheet" href="odometer-theme-car.css" />
<script src="odometer.js"></script>

<style>
.odometer {
    font-size: 100px;
}
</style>

<center>
<h1>Online Prize Draw</h1>
</center>

<?php
require('config.php');

function echoDebug($str) {
	$debug=0;
	if ($debug==1) {
		echo "$str";
	}
}

//Conexao com o banco de dados
if ($con) {
	$query="set names utf8";
	$result=mysqli_query($con,$query);
} else {
	echo "<center>Erro: sem conexão com o banco de dados</center>";
exit;
}

	echo "<center><br><br><br>";
	$sql = "SELECT ddd, cidade, estado, nome, substr(telefone_sem_ddd,3,8) as telefone_sem_ddd from sorteio WHERE telefone_sem_ddd is not null ORDER BY rand() LIMIT 1";
	//$sql = "SELECT * from sorteio WHERE telefone_sem_ddd is not null ORDER BY rand() LIMIT 1";
	$result2 = mysqli_query($con, $sql);

	if (mysqli_num_rows($result2) > 0) {

		$c=0;
		while($row2 = mysqli_fetch_assoc($result2)) {
			$n = $row2['nome'];
			$f = $row2['telefone_sem_ddd'];
			$d = $row2['ddd'];
			$c = $row2['cidade'];
			$e = $row2['estado'];

			//Just for testing
			//echo $d . " . " . $f;
			echo "<br>";

			echo "DDD: <div id=\"odometer1\" class=\"odometer\">0</div>";
			echo "<br>";
			echo "<br>";
			echo "Telefone: <div id=\"odometer\" class=\"odometer\">0</div>";
			//echo "<div id=\"odometer\" class=\"odometer\">0</div>";
			//echo "<div id=\"odometer\" class=\"odometer\">0</div>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "Cidade: $c | Estado: $e";

			echo "
<script>
setTimeout(function(){
    odometer.innerHTML = $f;
    odometer1.innerHTML = $d;
}, 1000);
</script>

";

		}
	}
	

?>
</html>
