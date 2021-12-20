# Exemple 8 - Type BAC (Probabilités et suites)

Dans un zoo, l'unique activité d'un manchot est l'utilisation, dans un bain aquatique, d'un toboggan et d'un plongeoire.

On a observé que si un manchot choisit le toboggan, la probabilité qu'il le reprenne est 0,3. Si un manchot choisit le plongeoire, alors la probabilité qu'il le reprenne est de 0,8. Lors du premier passage, les deux équipements ont la même probabilité d'être choisi, $\forall n \in I\!N^*$, on note:

$T_n$: "Le manchot choisit le toboggan au nième passage"

$P_n$: "Le manchot choisit le plongeoire au nième passage"

On note $u_n = P(T_n)$

1. A l'aide d'un arbre de probabilité, prouver que $P(T_2)={1 \over 4}$

<section class="hidden">

<center>
![Arbre pondéré](../data/maths/Chapter_6/exemple_8_1.svg)
</center>

$P_1$ et $T_1$ forment une partition de l'univers.

D'après la formule des probabilités totales:

$$
\begin{array}{ll}
    P(T_2) &= P(P_1 \cap T_2) + P(T_1 \cap T_2) \\
        &= P(P_1) \times P_{P_1}(T_2) + P(T_1) \times P_{T_1}(T_2) \\
        &= {1 \over 2} \times 0,2 + {1 \over 2} \times 0,3 \\
        &= 0,25 = {1 \over 4}
\end{array}
$$

</section>

2. A l'aide d'un arbre de probabilité, démontrer que $u_{n+1}=0,1u_n+0,2$.

   <section class="hidden">

    <center>
    ![Arbre pondéré](../data/maths/Chapter_6/exemple_8_2.svg)
    </center>

   $P_n$ et $T_n$ forment une partition de l'univers.

   D'après la formule des probabilités totales:

   $$
   \begin{array}{rl}
       u_{n+1} &= P(P_n \cap T_{n+1}) + P(T_n \cap T_{n+1}) \\
           &= P(P_n) \times P_{P_n}(T_{n+1}) + P(T_n) \times P_{T_n}(T_{n+1}) \\
           &= (1-u_n) \times 0,2 + u_n \times 0,3 \\
           &= 1-0,2u_n + 0,3u_n \\
           &= 0,1u_n+0,2
   \end{array}
   $$

   </section>

3. On pose: $v_n = u_n-{2 \over 9}$

   a) Démontrer que $v_n$ est une suite géométrique.

   <section class="hidden">

   $$
   \begin{array}{rl}
      v_{n+1} &= 0,1(v_n + {2 \over 9}) + 0,2 - {2 \over 9} \\
              &= 0,1v_n+{1 \over 45} - {1 \over 45} \\
              &= 0,1v_n
   \end{array}
   $$

   Donc $v_n$ est une suite géométrique de raison $q=0,1$ et de premier terme $\begin{array}{rl}
        v_1 &= u_1 - {2 \over 9} \\
            &= {1 \over 2} - {2 \over 9} = {5 \over 18}
    \end{array}$

    </section>

   b) Exprimer $u_n$ en fonction de $n$.

    <section class="hidden">

   $$
   \begin{array}{rl}
       u_n &= v_n + {2 \over 9} \\
           &= ({5 \over 18} \times 0,1^{n+1})+{2\over9}
   \end{array}
   $$

    </section>

   c) Etudier la limite de $(u_n)$.

    <section class="hidden">

   $$
   u_n = {5 \over 18} \times 0,1^{n-1}+{2\over9}
   $$

   $$
   \begin{rcases}
       \lim\limits_{n \to +\infty } {2 \over 9} = {2 \over 9} \\
       \lim\limits_{n \to +\infty } {5 \over 18} = {5 \over 18}  \\
       \lim\limits_{n \to +\infty } 0,1^{n-1} = 0 \text{, car} -1 < 0,1 < 1 \\
   \end{rcases} \text{par règles opératoires} \lim\limits_{n \to +\infty} u_n = {2 \over 9}
   $$

    </section>
