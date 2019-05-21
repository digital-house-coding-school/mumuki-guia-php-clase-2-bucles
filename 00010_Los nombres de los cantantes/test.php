public function testDescriptionExample(): void {
$sol = '/*...content...*/';

$cantantes = [
  0 => [
    "nombre" => "Luis",
    "apellido" => "Miguel"
  ],
  1 => [
    "nombre" => "Charly",
    "apellido" => "Garcia"
  ],
  2 => [
    "nombre" => "Joaquín",
    "apellido" => "Sabina"
  ]
];

$nombres = $this->bucles($cantantes);

$cantidadOK = count($nombres) == 3;
$this->assertTrue($cantidadOK, "La cantidad de nombres resultados es incorrecta");

$i = 0;
$nombresOK = true;

foreach ($nombres as $nombre) {
  $nombresOK = $nombresOK && $nombre == $cantantes[$i]["nombre"];
  $i++;
}

$this->assertTrue($nombresOK, "Si bien la cantidad de nombres es correcta, los nombres en sí no están bien");

// Otra más

$cantantes = [
  0 => [
    "nombre" => "Carlos",
    "apellido" => "Miguel"
  ],
  1 => [
    "nombre" => "Juan",
    "apellido" => "Garcia"
  ],
  2 => [
    "nombre" => "Enzo",
    "apellido" => "Sabina"
  ]
];

$nombres = $this->bucles($cantantes);

$cantidadOK = count($nombres) == 3;
$this->assertTrue($cantidadOK, "La cantidad de nombres resultados es incorrecta");

$i = 0;
$nombresOK = true;

foreach ($nombres as $nombre) {
  $nombresOK = $nombresOK && $nombre == $cantantes[$i]["nombre"];
  $i++;
}

$this->assertTrue($nombresOK, "Si bien la cantidad de nombres es correcta, los nombres en sí no están bien");

$this->assertTrue(substr_count($sol, "foreach") > 0, "No utilizaste un foreach");
$this->assertTrue((substr_count($sol, "for ") + substr_count($sol, "for(")) == 0, "No deberías haber utilizado un for");
}

private /*...content...*/
