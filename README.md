# PruebaMoodle
La solución del desafío consta de 10 combinaciones C n,k = n!/(k!(n!-k!))

Donde:

n - Número de elementos para combinar 5

k - Número de elementos del subgrupo (pareja de 2)

C n,k = n!/(k!(n!-k!)) = 10, es decir el juego tendra 10 reglas.


Al ejecutar index.php se genera dos números aleatorios que toman el valor de la mano: "Rock", "Paper", "Scissors", "Spock" y "Lizard".
la aplicación procesa y devolvera el resultado (según las reglas definidas en el requerimiento):



1 CASE

1º Hand: Paper

2º Hand: Spock

Game: Paper disaproves Spock

Win : Paper


2 CASE

1º Hand: Paper

2º Hand: Lizard

Game: Lizard eats Paper

Win : Lizard



... etc 



Y cuando las manos son iguales tendremos este resultado:

1º Hand: Scissors

2º Hand: Scissors

Game: Try again.

Win : Tie
