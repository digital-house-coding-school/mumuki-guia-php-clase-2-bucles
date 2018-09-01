public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $cantVD = substr_count($sol, "var_dump");
  
  $this->assertTrue($cantVD > 0, "Falta el var_dump!!!");

  $testing = [
    "primero" => 'Oops! Me descubriste! Soy $prueba',
    "segundo" => "Y puedo ser un array ;)"
  ];
  
  $this->debug($testing);
  $this->assertTrue(false, "No hay ningún exit en el camino...");
}

/*...content...*/