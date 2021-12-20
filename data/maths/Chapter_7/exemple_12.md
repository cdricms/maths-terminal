# Exemple 12 - Type BAC

$f(x) = \frac{e^x}{x+1}$ sur $]-1;+\infty[$

1. Etudier la limite de $f$ en $-1$.

<section class="hidden">

$$
\begin{rcases}
    \lim\limits_{x \to -1^+ } e^x = e^{-1} \\
    \lim\limits_{x \to -1^+ } x+1 = 0⁺ \\
\end{rcases} \text{par quotient} \lim\limits_{x \to -1⁺} f(x) = +\infty
$$

</section>

2. Interpréter ce résultat.

<section class="hidden">

$$
\text{alors la droite d'équation } x=-1 \text{ est une asymptote verticale à Cf.}
$$

</section>

3. Etudier la limite de $f$ en $+\infty$.

<section class="hidden">
   On est en présence d'une forme indéterminée, de la forme: "$\frac{\infty}{\infty}$".

$$
   \begin{array}{rl}
   \large f(x) &= \frac{\large e^x}{ \large x+1} \\
        &= \frac{\large x(\frac{\large e^x}{\large x})}{\large x(1+\frac{\large 1}{\large x})} \\
        &= \frac{\frac{\large e^x}{\large x}}{\large 1+\frac{\large 1}{\large x}} \\
   \end{array}
$$

$$
\begin{rcases}
    \lim\limits_{x \to +\infty } \frac{e^x}{x} = +\infty \text{ (C.C)} \\
    \lim\limits_{x \to +\infty } 1+\frac{1}{x} = 1 \\
\end{rcases} \text{par quotient} \lim\limits_{x \to +\infty} f(x) = +\infty
$$

</section>

4. Donner le tableau de variation de $f$.

   <section class="hidden">

   $f$ est dérivable sur $]-1;+\infty[$

   $f$ est de la forme $\frac{u(x)}{v(x)}$

   $$
   \begin{array}{ l c l }
   & \text{avec} & \\
   u(x) = e^x & \text{ et } & v(x) = x+1 \\
   u'(x) = e^x &  & v'(x) = 1 \\
   \end{array}
   $$

   $$
   \begin{array}{ll}
   f'(x) &= \frac{\large u'(x) \times v(x) - v'(x) \times u(x)}{\large v^2(x)} \\
              &= \frac{\large e^x(x+1) -1e^x}{\large (x+1)²} \\
              &= \frac{\large e^x(x+1-1)}{\large (x+1)²} \\
              &= \frac{\large e^x(x)}{\large (x+1)²}
   \end{array}
   $$

   $\forall x \in ]-1;+\infty[$, $(x+1)² > 0$, $e^x > 0$.

   On résout $x \geq 0$

   <center>
   ![Tableau de variations de f](../data/maths/Chapter_7/exemple_12_4.svg)
   </center>

   </section>
