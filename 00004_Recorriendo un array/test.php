public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $array1 = [10, 20, 30];
  $resul1 = $this->bucles($array1);
  
  $this->assertTrue($resul1 == 60, "La suma de 10, 20 y 30 debería ser 60");
  
}

private /*...content...*/