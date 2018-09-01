public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $cantantes = [
    "Luis" => "Miguel",
    "Charly" => "García",
    "Joaquín" => "Sabina"
  ];
  
  $resultados = $this->bucles($cantantes);
  
  $funciona = array_key_exists("Miguel", $resultados) && $resultados["Miguel"] == "Luis" && array_key_exists("García", $resultados) && $resultados["García"] == "Charly" && array_key_exists("Sabina", $resultados) && $resultados["Sabina"] == "Joaquín";
  
  $this->assertTrue($funciona, "La función parecería no hacer lo pedido...);
}

private /*...content...*/