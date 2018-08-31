public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $resultado = $this->bucles();
  var_dump(count($resultado));exit;
  
  $this->assertTrue(count($resultados) == 11, 'Eh wacho, no hay 11 elementos en la lista...');
  
  $numeros = $resultados[0] == 0 && $resultados[1] == 1 && $resultados[2] == 2 && $resultados[3] == 3 && $resultados[4] == 4 && $resultados[5] == 5 && $resultados[6] == 6 && $resultados[7] == 7 && $resultados[8] == 8 && $resultados[9] == 0 && $resultados[10] == 10;
  
  $this->assertTrue($numeros, "El array no tiene los numeros del 0 al 10");
}

private /*...content...*/