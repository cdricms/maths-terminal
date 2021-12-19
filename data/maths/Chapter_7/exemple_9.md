# Exemple 9 - Type BAC

<section class="to-know">

Limite de référence:

$\lim\limits_{x \to +\infty} e^x = +\infty$

</section>

1. Prouver que: $\lim\limits_{x \to +\infty} e^x = +\infty$.

<section class="hidden">

$$
\begin{array}{l}
e \approx 2,718 \\
\lim\limits_{n \to +\infty} e^n = +\infty \\
\text{ou encore:}\\
\lim\limits_{x \to +\infty} e^x = +\infty
\end{array}
$$

</section>

2. Prouver que $\lim\limits_{x \to -\infty} e^x = 0$

<section class="hidden">

On va poser $x=-u$

$$
\lim\limits_{x \to -\infty} e^x
= \lim\limits_{u \to +\infty} e^{-u}
= \lim\limits_{u \to +\infty} \frac{1}{e^u}
= 0
$$

</section>

<section class="to-know">

Limite de référence:

$\lim\limits_{x \to +\infty} e^x = +\infty$

</section>

3. $f(x) = 2e^x - \frac{1}{x}$ sur $[0; +\infty[$

Limite en $0$ et en $+\infty$ ?

<section class="hidden">

En $0⁺$:

$$
\begin{rcases}
    \lim\limits_{x \to 0⁺ } 2e^x = 2 \\
    \lim\limits_{x \to 0⁺ } \frac{1}{x} = +\infty \\
\end{rcases} \text{par différence: } \lim\limits_{x \to 0⁺} f(x) = -\infty
$$

---

En $+\infty$:

$$
\begin{rcases}
    \lim\limits_{x \to +\infty } 2e^x = +\infty \\
    \lim\limits_{x \to +\infty } \frac{1}{x} = 0⁺ \\
\end{rcases} \text{par différence: } \lim\limits_{x \to +\infty} f(x) = +\infty
$$

</section>
