<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equive="Content-Type" content="text/html;charset=UTF-8" >
  <title>都道府県リスト</title>
  <style>
  @import "style.css";
  </style>
</head>
<body>
<?php



function sankakkei_menseki($teihen, $takasa){
	$menseki = $teihen * $takasa / 2;
	return $menseki;
}

$teihen = 3;
$takasa = 4;

$menseki = sankakkei_menseki($teihen , $takasa);
echo '底辺' . $teihen . '、高さ' . $takasa . 'の三角形の面積は' . $menseki . 'です。';
?>

</body>
</html>