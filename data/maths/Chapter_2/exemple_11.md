# Exemple 11 - Type BAC

On veut ranger 3 mangas et 2 BD sur la même étagère. $\\$

1. Combien de rangement possibles ?

<section class="hidden">

L'ordre intervient


On modélise la situation par des permutations / arrangement d'un ensemble de 5 éléments. $\\$

$$
    5! = 5\times4\times3\times2\times1=120
$$

</section>

<section class="to-know">
Pour calculer avec les factorielles ( ! )

Sur calculatrice : OPTN --> F6 --> F3 et vous trouverez en F1 $x!$

 $Pour faire \begin{pmatrix}
                    4 \\
                    1
                    \end{pmatrix} il faut : \text{OPTN --> F6 --> F3 --> 4 --> F3 --> 1}$

</section>

2. Combien de rangements possible si on veut les groupes par genre ?


<section class="hidden">

$$
    \begin{matrix}
    M1 & M2 & M3 & B1 & B2 \quad B1 & B2 & M3 & M2 &M1 \\
    3 & 2 & 1 & 2 & 1 \qquad 2 & 1 & 3 & 2 & 1
    \end{matrix}
$$

$(3\times2\times1\times2\times1)+(2\times1\times3\times2\times1)=24$
</section>


3. Combien de rangements possible commençant par une BD ?

<section class="hidden">


$$
    \begin{matrix}
    Place 1 & 2 & 3 & 4 & 5 \\
    2 & 4 & 3 & 2 & 1
    \end{matrix}
$$

$2\times4\times3\times2\times1=48$

</section>

4. Si vous ne vous rappelez plus de la notations et de la logique, voici des explications.

<section class="hidden">

Rappel à la question 2 : les M correspondent aux Mangas et les B aux BD. $\\$

Ainsi au rangement M1 on à 3 mangas de disponible puis au rangement M2 nous en avons plus que 2 etc. $\\$

Rappel à la question 3 : $\\$

Ici pour la place 1 on doit y ranger une BD nous en avons donc 2. $\\$

Pour la place 2 on note 4 car nous avons 3 mangas et l'on ajoute la BD qui n'est pas ranger à la place 1. $\\$

En espérant que les explications ont été claires et vous ont aidées.


</section>
