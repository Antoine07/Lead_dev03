
# Reducer

## Part 1

Définition : un reducer applique une fonction qui est un "accumulateur" et qui traite chaque valeur d'un tableau ou collection (de la gauche vers la droite) afin de la **réduire à une seule valeur**.

1. Créez maintenant une fonction reduce à l'aide d'une fonction de callback passée en paramètre (reducer) de votre fonction.

```php
$numbers = [1,2,3];
// définissez la fonction $f
my_reduce($numbers, $f, $initial=0);
/*
$f = function ($acc, $curr) {
    return "f($acc,$curr)";
};
*/
// (f(f(0,1),2),3)

// On peut également faire la somme 
$sum = function($acc, $curr) { return $acc + $curr } ;
my_reduce($numbers, $sum, $initial=0);
// 6
```

2. Testez votre reducer pour additionner les nombres suivants :

```php
$numbers = [1,2,3];
my_reduce($numbers, $sum, $initial=0);
// 6
```

## Part 2

Soient les données suivantes : en utilisant une classe anonyme hydratez un tableau d'objets, chaque objet aura comme attribut un nom, un prix et une quantité. Puis calculez le total TTC à l'aide de votre reducer.

```php
// dans le tableau vous avez des tableaux nom, prix et quantité des produits
$products = [['milk', 3, 3], ['butter', 2.5, 2],['eggs', .7, 10]];
echo my_reduce($hydrate(), $callback, 0); // 21
```
