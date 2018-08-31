public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $resultados = $this->bucles();
  var_dump($resultados);
  $this->assertTrue(count($resultados) === 6, 'El array no tiene 6 elementos');
 
  $i = 5;
  $numeros = true;
  foreach ($resultados as $resultado) {
    $numeros = $numeros && $resultado == $i;
    $i++;
  }
  
  $this->assertTrue($numeros, "El array no tiene los numeros del 5 al 10");
  
  $cantFors = substr_count($sol, "for");
  
  $this->assertTrue($cantFors > 0, "Parecería que no escribiste ningún for...");
  
  $cant9 = substr_count($sol, "9");
  
  $this->assertTrue($cant9 == 0, "No deberías escribir los números a mano...");
}

private /*...content...*/