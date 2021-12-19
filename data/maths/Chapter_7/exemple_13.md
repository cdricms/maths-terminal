# Exemple 13 - Type BAC

$f(x) = e^{2x}-e^x-x$ sur $\rm I\!R$

1. Limite de $f$ en $-\infty$ et en $+\infty$.

<section class="hidden">

$$
\begin{rcases}
    \lim\limits_{x \to -\infty} e^{2x} = 0 \\
    \lim\limits_{x \to -\infty} e^x = 0 \\
    \lim\limits_{x \to -\infty} x = -\infty
\end{rcases} \text{par règles opératoires:} \lim\limits_{x \to -\infty} f(x) = +\infty
$$

---

En $+\infty$.

On est en présence d'une forme indéterminée, du type: "$\infty - \infty$".

$$
   \begin{array}{ll}
   f(x) &= e^x\times e^x -e^x -x \\
        &= e^x(e^x-1-xe^{-x})
   \end{array}
$$

$$
\begin{rcases}
    \lim\limits_{x \to +\infty} e^x = +\infty \\
    \lim\limits_{x \to +\infty} 1 = 1 \\
    \lim\limits_{x \to +\infty} xe^{-x} = 0 \text{(C.C)}
\end{rcases} \text{par règles opératoires:} \lim\limits_{x \to +\infty} f(x) = +\infty
$$

</section>

2. Calculer $f\prime(x)$.

   <section class="hidden">

   $f$ est de la forme : $e^{2x}-e^x-x$

   $$
   f\prime(x) = 2e^{2x}-e^x-1
   $$

   </section>

3. Après avoir vérifier que $f\prime(x) = (e^x-1)(2e^x+1)$, dresser le tableau de variations de $f$.

<section class="hidden">

On a:

$$
   \begin{array}{ll}
   (e^x-1)(2e^x+1) & \\
    = 2e^{2x}+e^x-2e^x-1 & \\
    = 2e^{2ex}-e^x-1 & \\
    = f\prime(x)
   \end{array}
$$

$\forall x \in \rm I\!R, 2e^x+1 > 0$ donc $f\prime(x)$ est du signe de $e^x-1$

On résout:

$$
   \begin{array}{lcl}
   e^x-1 &\geq &0\\
   e^x &\geq & 1 \\
   e^x &\geq &e⁰ \\
   x &\geq &0
   \end{array}
$$

// Todo: dresser le tableau.

</section>
