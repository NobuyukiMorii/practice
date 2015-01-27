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
$foo = array('Japan'=>'Tokyo' , 'Philippin' => 'Manila' , 'America' => 'Washington' , 'Italia' => 'Rome' , 'France' =>'Paris');
foreach ($foo as $key => $value) {
	echo $key . '：' . $value;
	echo  '<br>';
}

?>

</body>
</html>