# Exemple 5

$\large u_0=1$ \
$\large u_{n+1} = \frac {\large u_n}{ 1+ \large u_n}$ 

$V_n= \frac{\large 1}{\large u_n}$

a) Démontrer que $(V_n)$ est une suite arithmétique.

<section class="to-know">

Il faut prouver que : $V_{n+1}-V_n=r$

</section>

<section class="hidden">

$$
    \begin{array}{rl}
    V_{n+1}-V_n &= \frac{\large 1}{\large u_{n+1}} - \frac{\large 1}{\large u_n} \\\\
    &= \frac{{\large 1}}{\frac{\large u_n}{\large 1+u_n}} \\\\
    &= \frac {\large 1+u_n}{\large u_n}  - \frac {\large 1}{\large u_n}\\\\
    &= \frac {\large 1+u_n-1}{\large u_n} \\\\
    &= \frac {\large u_n}{\large u_n} = \large 1
    \end{array}
$$

Donc, $(V_n)$ est une suite arithmétique de raison $\large r=1$ et de premier terme $V_0= \frac {\large 1}{\large u_0} = \frac {\large 1}{\large 1} = 1$
</section>

b) Exprimer $(V_n)$ en fonction de n.

<section class="to-know">

Rappels sur les formules des suites arithmétiques :

$V_n = V_0 + \large r\times n$ \
$V_n = V_1 + \large r(n-1)$

</section>

<section class="hidden">

$$
\begin{array}{ll}
V_n &= V_0 + \large r\times n \\
    &= 1 + 1\times n \\
    &= 1+n
\end{array}
$$

</section>

c) On pose : $S = V_0 + V_1+V_2+ {...} + V_n$

<section class="to-know">

Rappels pour calculer la somme de terme consécutifs d'une Suite Arithmétique.

$S= \text{(nombre de termes)} \times \frac {\large{\text{1er terme + dernier terme}}}{\large 2}$

</section>

Exprimer $S$ en fonction de n
<section class="hidden">

$$
    \begin{array}{rl}
    S &= \large (n+1)\times \large(\frac{1+1+n}{2}) \\\\
      &= \large (n+1)\times  \large(\frac {2+n}{2}) \\\\
      &= \large \frac{\large(n+1)(2+n)}{\large 2} \\\\
    \end{array}
$$

</section>