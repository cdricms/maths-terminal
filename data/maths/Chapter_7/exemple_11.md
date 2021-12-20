# Exemple 11 - Type BAC

$f(x) = xe^{-x}+3$ sur $\rm I\!R$.

1. Limite de $f$ en $-\infty$ ?

<section class="hidden">

$$
\begin{rcases}
    \lim\limits_{x \to -\infty } x = -\infty \\
    \lim\limits_{x \to -\infty } e^{-x} = +\infty \\
    \lim\limits_{x \to -\infty } 3 = 3 \\
\end{rcases} \text{par règles opératoires: } \lim\limits_{x \to -\infty} f(x) = -\infty
$$

</section>

2. Limite de $f$ en $+\infty$ ?

<section class="hidden">

$$
\begin{rcases}
    \lim\limits_{x \to +\infty } xe^{-x} = 0⁺ \text{ (C.C)} \\
    \lim\limits_{x \to +\infty } 3 = 3 \\
\end{rcases} \text{par somme: } \lim\limits_{x \to +\infty} f(x) = 3
$$

</section>

3. Dresser le tableau de variations de $f$.

<section class="hidden">

$f$ est dérivable sur $\rm I\!R$

$f$ est de la forme $u(x) \times v(x)+3$.

$$
\begin{array}{ l c l }
& \text{avec} & \\
u(x) = x & \text{ et } & v(x) = e^{-x} \\
u\prime(x) = 1 &  & v\prime(x) = -e^{-x} \\
\end{array}
$$

$$
\begin{array}{ll}
f\prime(x) &= \large u\prime(x) \times v(x) + v\prime(x) \times u(x) \\
            &= \large 1e^{-x} -e^{-x} \times x \\
            &= \large e^{-x}(1-x)
\end{array}
$$

$\forall x \in \rm I\!R$, $e^{-x} > 0$, donc $f\prime(x)$ est du signe de $1-x$.

On résout: $1-x \geq 0$

$$
   \begin{array}{lcl}
   1-x &\geq &0\\
   -x &\geq & -1 \\
   x &\leq & 1
   \end{array}
$$

<center>
![Tableau de variations de f](../data/maths/Chapter_7/exemple_11_3.svg)
</center>

</section>
