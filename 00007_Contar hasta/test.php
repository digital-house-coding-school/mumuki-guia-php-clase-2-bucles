public function testDescriptionExample(): void {
  $sol = '/*...content...*/';
  
  $res1 = $this->bucles(98);
  $i = 98;
  
  $funciona = count($res1) == 3;
  
  foreach ($res1 as $r1) {
    $funciona = $funciona && $r1 == $i;
    $i++;
  }
  
  $res2 = $this->bucles(1);
  $i = 1;
  
  $funciona = $funciona && count($res2) == 100;
  
  foreach ($res2 as $r2) {
    $funciona = $funciona && $r2 = $i;
    $i++;
  }
  
  $this->assertTrue($funciona, "Oops. La función no esta contando bien");
  
  $trampa = substr_count($sol, "for") > 0;
  
  $this->assertTrue($trampa, "No queremos que utilices ningún for en este ejercicio");
}

private /*...content...*/