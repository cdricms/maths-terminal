# Exemple 8 - Type BAC

4 boules blanches numérotées de 1 à 4 $\\$
3 boules vertes numérotées de 1 à 3 $\\$
2 boules noires numérotées de 1 à 2 $\\$


On choisit simultanément 3 boules. $\\$




1. Combien de choix possible ?

<section class="hidden">

L'ordre n'intervient pas.


On modélise la situation par des combinaisons de 3 éléments parmi 9. $\\$

On a :

$$
    \begin{pmatrix}
    9 \\
    3 
    \end{pmatrix} = \frac {9!}{3!6!} = \frac {9\times8\times7\times6!}{2\times3\times6!} = 84
$$

</section>

2. Combien de tirages contenant 3 boules de la même couleurs ?


<section class="hidden">


On modélise la situation par des combinaisons de 3 éléments parmi 4 OU de 3 éléments parmi 3. $\\$

On a :

$$
    \begin{pmatrix}
    4 \\
    3 
    \end{pmatrix} +
    \begin{pmatrix}
    3 \\
    3 
    \end{pmatrix} = \begin{pmatrix}
                    4 \\
                    1 
                    \end{pmatrix} +
                    \begin{pmatrix}
                    3 \\
                    3 
                    \end{pmatrix} = 4+1 = 5
$$

</section>


3. Combien de choix contenant 1 seul numéros impair ?


<section class="hidden">


On modélise la situation par des combinaisons de 1 éléments parmi 5 et de 2 éléments parmi 4. $\\$

On a :

$$
    \begin{pmatrix}
    5 \\
    1 
    \end{pmatrix} +
    \begin{pmatrix}
    4 \\
    2 
    \end{pmatrix} = 5\times6=30
$$

</section>