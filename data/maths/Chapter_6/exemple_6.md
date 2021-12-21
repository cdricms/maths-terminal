# Exemple 6 - Type BAC (Probabilité et suite)

Dans un jeu une suite d'énigmes est proposée aux faveurs, elles sont classées en 2 catégories:

$A$: facile et $B$: difficile

La première énigme est facile.

Si une énigme est facile, alors la probabilité que la suivante soit difficile est égale à 0,15.

Si une énigme est difficile, alors la probabilité que la suivante soit facile est égale à 0,1.

$\forall n \geq 1$, on note:

$A_n$: "l'énigme numéro n est facile et $a_n$ sa probabilité $a_n=P(A_n)$.

$B_n$: "l'énigme numéro n est difficile et $b_n$ sa probabilité $b_n=P(B_n)$.

1. Donner $a_1$ et $b_1$.

<section class="hidden">

$$
a_1 = P(A_1) = 1 \\
b_1 = P(B_1) = 0
$$

</section>

2. Compléter l'arbre pondéré

<section class="hidden">

// TODO: Arbre

</section>

3. Prouver que $a_2=0,85$.

   <section class="hidden">

   $A_1$ et $B_1$ forment une parititon de l'univers.

   D'après la formule des probabilités totales:

   $$
   \begin{array}{rcl}
       a_2 &= P(A_2) &= P(A_1 \cap A_2) + P(B_1 \cap A_2) \\
           &         &= P(A_1) \times P_{A_1}(A_2) + P(B_1) \times P_{B_1}(A_2) \\
           &         &= 1 \times 0,85 + 0 \times 0,1 \\
           &         &= 0,85
   \end{array}
   $$

   </section>

4. Compléter l'arbre pondéré puis prouver que $\forall n \in I\!N^*$, $a_{n+1}=0,75a_n+0,1$.

   <section class="hidden">

   // TODO: Arbre

   $a_{n+1}=P(A_{n+1})$

   $A_n$ et $B_n$ forment une partition de l'univers.

   D'après la formule des probabilités totales.

   $$
   \begin{array}{rcl}
       a_{n+1} &= P(A_{n+1}) &= P(A_n \cap A_{n+1}) + P(B_n \cap A_{n+1}) \\
           &         &= P(A_n) \times P_{A_n}(A_{n+1}) + P(B_n) \times P_{B_n}(A_{n+1}) \\
           &         &= a_n \times 0,85 + b_n \times 0,1 \\
           &         &= 0,85a_n + 0,1(1-a_n) \\
           &         &= 0,85a_n + 0,1 - 0,1a_n \\
           &         &= 0,75a_n + 0,1
   \end{array}
   $$

   </section>

5. $\forall n \in I\!N^*$, on a $p$: $v_n=a_n-0,4$.

   a. Démontrer que $(v_n)$ est une suite géométrique.

   <section class="hidden">

   $$
   \begin{array}{rl}
       v_{n+1} &= a_{n+1} - 0,4 \\
               &= 0,75a_n +0,1 - 0,4 \\
       \text{or } a_n  &= v_n + 0,4 \\
       v_{n+1} &= 0,75(v_n+0,4) +0,1 -0,4 \\
               &= 0,75v_n +0,3 -0,3 \\
               &= 0,75v_n
   \end{array}
   $$

   Donc $(v_n)$ est une suite de raison $q=0,75$ et de premier terme $v_n=1-0,4=0,6$.

   </section>

b. Démontrer que $\forall n \in I\!N^*$, $a_n=0,8 \times 0,75^n + 0,4$.

<section class="hidden">

Vérifions que la propriété est vraie au rang initial.

$$
\begin{array}{rl}
    a_1 &= 0,8 \times 0,75¹ + 0,4
        &= 1
\end{array}
$$

donc $a_1 = 0,8 \times 0,75¹ + 0,4$

Supposons que pour un rang $n$ de $I\!N^*$, $a_n=0,8 \times 0,75^n +0,4$.

Démontrons que $\forall n \in I\!N^*$ $a_{n+1}=0,8 \times 0,75^{n+1}+0,4$.

// JE SAIS PLUS CE QUE JAI FOUTU

</section>

c) En déduire la limite de la suite $(a_n)$ et interpréter le résultat.

<section class="hidden">

$$
\begin{rcases}
    \lim\limits_{x \to +\infty } 0,8 = 0,8 \\
    \lim\limits_{x \to +\infty } 0,75^n = 0 \text{ car -1 < 0,75 <section 1} \\
    \lim\limits_{x \to +\infty } 0,4 = 0,4 \\
\end{rcases} \text{par règles opératoires: } \lim\limits_{x \to +\infty} u_n = 0,4
$$

A long terme, la probabilité d'avoir une énigme facile se rapproche de $0,4$.

</section>
