# Exemple 9 - Type BAC

32 cartes $\\$
Une "main" de 4 cartes est un ensemble de 4 cartes. $\\$



1. Combien de main de 4 cartes peut-on former ?

<section class="hidden">

L'ordre n'intervient pas.


On modélise la situation par des combinaisons de 4 éléments parmi 32. $\\$

$$
    \begin{pmatrix}
    32 \\
    4 
    \end{pmatrix} = \frac {32!}{4!28!} = \frac {32\times31\times30\times29\times28!}{4\times3\times2\times28!} = \frac {863040}{24} = 35960
$$

</section>

2. Combien de main de 4 cartes peut-on former avec 1 seul roi ?


<section class="hidden">


On modélise la situation par des combinaisons de 1 éléments parmi 4 et de 3 éléments parmi 28. $\\$

On a :

$$
    \begin{pmatrix}
    4 \\
    1
    \end{pmatrix} \times
    \begin{pmatrix}
    28 \\
    3 
    \end{pmatrix} = 4\times \frac{28!}{3!25!}=4\times \frac{28\times27\times26\times25!}{3!\times25!} = 4\times\frac{28\times27\times26}{6}=4\times3276=13104
$$

</section>


3. Combien de mains de 4 cartes peut-on former avec des figures ?


<section class="hidden">


On modélise la situation par des combinaisons de 4 éléments parmi 12. $\\$

On a :

$$
    \begin{pmatrix}
    12 \\
    4 
    \end{pmatrix} = \frac{12!}{4!8!}= \frac{12\times11\times10\times9\times8!}{24\times8!} = \frac{12\times11\times10\times9}{24}=495
$$

</section>