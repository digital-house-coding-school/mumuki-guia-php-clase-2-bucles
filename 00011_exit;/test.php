public function testDescriptionExample(): void {
  $testing = [
    "primero" => 'Oops! Me descubriste! Soy $prueba',
    "segundo" => "Y puedo ser un array ;)"
  ];
  
  $this->debug($testing);
  $this->assertTrue(false, "No hay ningún exit en el camino...");
}

/*...content...*/