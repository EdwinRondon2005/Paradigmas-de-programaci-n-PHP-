<!DOCTYPE html>
<html>
<head>
<title>Ejercicio de PHP <!--(que no s� absolutamente nada por cierto)--></title>
</head>
<body>
<h1>�Fizz o Buzz?</h1>
<form method = "post">
<label>Tiene que llenar este campo con un n�mero</label>
<input type = "num" name = "num" required = "true">
<button type = "submit">Calcular</button>
</form>

<?php

class printCondition
{

public$mData = array();

public function compare($mPairs, $num)
{

$this -> mData[$num] = $num;

foreach ($mPairs as $k => $v)
{

if (is_int($num/$k))
{

$this -> mData [$num] = str_replace ($num, "", $this -> mData [$num]);
$this -> mData [$num]. = $v;
}
}
}
}

$obj = new printCondition();

for ($x = 1; $x <= 100; $x++)
{

$obj -> compare ([3 => "Fizz", 5 => "Buzz"], $x);

print $obj -> mData [$x]
print PHP_EOL;
}

?>

</body>

<!--P.D.: ojal� que Dios me acompa�e y me de el poder para poder aprender m�s acerca de PHP.-->

</html>
