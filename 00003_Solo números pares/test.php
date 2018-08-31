public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $resultados = $this->bucles();
  
  $this->assertTrue(count($resultados) === 10, 'El array no tiene 10 elementos');
 
  $i = 2;
  $numeros = true;
  foreach ($resultados as $resultado) {
    $numeros = $numeros && $resultado == $i;
    $i = $i + 2;
  }
  
  $this->assertTrue($numeros, "El array no tiene los numeros pares del 2 al 20");
  
  $cantFors = substr_count($sol, "for");
  
  $this->assertTrue($cantFors > 0, "Parecería que no escribiste ningún for...");
  
  $cant10 = substr_count($sol, "10");
  
  $this->assertTrue($cant10 == 0, "No deberías escribir los números a mano...");
  
  $cantIfs = substr_count($sol, "if");
  
  $this->assertTrue($cantIfs == 0, "No deberías escribir ifs en este ejercicio");
}

private /*...content...*/