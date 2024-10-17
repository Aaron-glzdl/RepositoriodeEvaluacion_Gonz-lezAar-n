<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$empleados = [
    ["nombre" => "Said", "sueldo" => 3000],
    ["nombre" => "Aaron", "sueldo" => 2500],
    ["nombre" => "Pedro", "sueldo" => 4000],
    ["nombre" => "Ebano", "sueldo" => 3500],
    ["nombre" => "Mahoraga", "sueldo" => 2800],
];

usort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

echo "Empleados ordenados por sueldo:"."<br>";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: " . $empleado['sueldo'] . "<br>";
}

array_push($empleados, ["nombre" => "Carlos", "sueldo" => 3200]);
array_push($empleados, ["nombre" => "Alox", "sueldo" => 3600]);

echo "Empleados después de agregar 2 más:"."<br>";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: " . $empleado['sueldo'] ."<br>";
}
?>
</body>
</html>