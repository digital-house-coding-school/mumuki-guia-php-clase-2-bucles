Resulta que esta función recibe un array asociativo de este estilo:

```php
$cantantes = [
  "Luis" => "Miguel",
  "Charly" => "García",
  "Joaquín" => "Sabina"
];
```

Donde los nombres estan en la **clave** y los apellidos estan en el **valor** de cada uno de los elementos del array.

Utilizando la sintaxis `$clave => $valor` (con los nombres de variables que quieras!) tu trabajo es enrocar las claves y los valores dentro del array `$resultado`

El resultado debería verse: 

```php
$cantantes = [
  "Miguel" => "Luis",
  "García" => "Charly",
  "Sabina" => "Joaquín"
];
```