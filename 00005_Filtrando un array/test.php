public function testDescriptionExample(): void {
  $sol = '';
  
  $array1 = [1, 3, 5, 87, 133, 155];
  $res1 = $this->bucles($array1);
  
  $funciona = count($res1) == 0;
  
  $array2 = [2, 5, 98, 97, 99];
  $res2 = $this->bucles($array2);
  
  $funciona == $funciona && count($res2) == 2;
  
  $array3 = [100, 200, 300, 400, 401, 403, 405];
  $res3 = $this->bucles($array3);
  
  $funciona == $funciona && count($res3) == 4;
  
  $this->assertTrue($funciona, "El filtro no estaría funcionando bien");
}

private /*...content...*/