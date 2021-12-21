# Exemple 12 - Type BAC

Une société de vente de matériel de jardinage propose à ses clients des lots de 80 tondeuses. Une étude a montré que 95% des tondeuses vendus sont sans défaut. On note $X$ la variable aléatoire qui compte le nombre de tondeuses sans défaut.

a) Justifier que $X$ suit une loi binomiale.

<section class="hidden">

On répète 80 fois de manières identiques et indépendantes la même épreuve de Bernoulli de paramètre 0,95.

La variable aléatoire $X$ suit une loi binomiale de paramètres $n=80$ et $p=0,95$.

</section>

b) Calculer à $0,01$ près la probabilité qu'il y ait 75 tondeuses sans défaut.

<section class="hidden">

$$
\begin{array}{rl}
    P(X=75) &= \binom{80}{75} \times 0,95^{75} \times (1-0,75)⁵ \\
            &\approx 0,16 \text{ à l'aide de la calculatrice.}
\end{array}
$$

</section>

c) Déterminer le plus petit entier $k$ tel que $P(X \leq k) \geq 0,65$.

<section class="hidden">

<center>

A la calculatrice,

$P(X \leq 76) \approx 0,57$

$P(X \leq 77) \approx 0,77$

donc k = 77

</center>

</section>

d) On souhaite déterminer le plus petit entier $k$ tel que la probabilité. $P(X \leq k) \geq S$ avec $S \in ]0; 1[$

Compléter l'algorithme.

```
Tant que ...:
    k <- ...
    P <- ...
Fin Tant que
```

<section class="hidden">

```
Tant que P < S:
    k <- k+1
    P <- P + combinaison(80, k) * 0.95 * k * 0.05 ** (80 - k)
Fin Tant que
```

</section>
