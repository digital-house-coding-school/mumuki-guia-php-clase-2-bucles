public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $array1 = ["primero" => 10, "segundo" => 20, "tercero" => 30];
  $resul1 = $this->bucles($array1);
  
  $this->assertTrue($resul1 == 60, "La suma de 10, 20 y 30 debería ser 60");
  
  $array2 = ["primero" => 15, "segundo" => 10, "tercero" => 5];
  $resul2 = $this->bucles($array2);
  
  $this->assertTrue($resul2 == 30, "La suma de 15, 10 y 5 debería ser 30");
  
  $array3 = ["primero" => 4, "segundo" => 8, "tercero" => 15];
  $resul3 = $this->bucles($array3);
  
  $this->assertTrue($resul3 == 27, "La suma de 4, 8 y 15 debería ser 27");
  
  $cantFors = substr_count($sol, "foreach");
  
  $this->assertTrue($cantFors > 0, "Parecería que no escribiste ningún for...");
}

private /*...content...*/