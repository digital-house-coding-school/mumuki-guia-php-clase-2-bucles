En este caso vamos a decir algo así como... "mientras el número no sea un 5..."

Eso lo podemos escribir cómo

```php
while (NO SEA UN 5) {

}
```

Ahora, vamos a operar con números del array `$dados`. Nuestro **while** quedaría más parecido a esto...

```php
while ($dados[POSICION] == 5) {

}
```

¿Y esa POSICION? Al igual que en un **for** podemos tener una variable `$i` que haga de indice y siempre pida "la próxima posición del array".
Se vería algo así:

```php
$i = 0;
while ($dados[$i] == 5) {
  //Tu código va acá!
  $i++;
}
```

De este modo, `$i` comienza en 0 pero cada ciclo del **while** aumenta en 1.
