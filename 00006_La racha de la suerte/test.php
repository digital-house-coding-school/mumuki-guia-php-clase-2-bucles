public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $array1 = [5,5,5,5,1];
  $sol1 = $this->dados($array1);
  
  $funciona = $sol1 == 4;
  
  $array2 [1,1];
  $sol2 = $this->dados($array2);
  
  $funciona = $funciona && $sol2 == 0;
  
  $array3 = [5,5,5,5,5,5,5,5,5,5,1];
  $sol3 = $this->dados($array3); 
  
  $funciona = $funciona && $sol3 == 10;
  
  $this->assertTrue($funciona, "La función no esta contando bien la racha...");
}

private /*...content...*/