<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
 
<?php foreach($css_files as $file): ?>
   
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<div>


</div>

    <div style='height:20px;'></div>  
    <div>
<?php echo $output; ?>
 
    </div>

<?php
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$mostrar=0;
if (strpos($link, 'edit') > 0)
	$mostrar++;
if (strpos($link, 'read') > 0)
	$mostrar++;

if ($mostrar > 0) {

	$tmp=explode('/', $link);
	$ido=$tmp[7];
	$idt=$tmp[9];
	$link2=$ido . "_" . $idt;
	//echo "link2 = $link2";
	
	if ($ido === 'laboratorios') {
		echo "<a name=equipamentos></a><div>";
		echo "<h3>Equipamentos e recursos do laboratório</h3>";
		//echo "<IFRAME SRC=/saginweb/crud/index.php/main/embed_equipamento/tabela_$link2 WIDTH=1200 frameborder=0 scrolling=no onload=\"resizeIframe(this)\"/>";
		echo "<IFRAME SRC=/saginweb/crud/index.php/main/embed_equipamento/tabela_$link2 WIDTH=1200 Height=500></IFRAME>";
		echo "</div>";


	}

?>


<?php } ?>



<!-- Beginning footer -->
<div>
<br>

<button onclick="goBack()">Voltar</button>

<script>
function goBack() {
    window.history.back();
}
</script>

</div>
<!-- End of Footer -->
</body>
</html>
