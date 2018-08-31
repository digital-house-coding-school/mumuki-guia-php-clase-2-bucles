public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $array1 = [10, 20, 30];
  $resul1 = $this->bucles($array1);
  
  $this->assertTrue($resul1 == 60, "La suma de 10, 20 y 30 debería ser 60");
  
  $array2 = [15, 10, 5];
  $resul2 = $this->bucles($array2);
  
  $this->assertTrue($resul2 == 30, "La suma de 15, 10 y 5 debería ser 30");
  
  $array3 = [4, 8, 15];
  $resul3 = $this->bucles($array3);
  
  $this->assertTrue($resul3 == 27, "La suma de 4, 8 y 15 debería ser 27);
  
}

private /*...content...*/