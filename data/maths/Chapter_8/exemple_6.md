# Exemple 6 - Type BAC

$f(x) = \large\frac{1+\ln(x)}{x^2} \space$ sur $]0; +\infty[$


1. Résoudre l'équation $f(x) = 0$.

<section class="hidden">

$$
    \begin{equation}
    \begin{split}
    \frac {\large 1+\ln(x)}{\large x^2} &= \large 0 \\\\
\large 1+\ln(x) &= \large 0 \\\\
\large \ln(x) &= \large -1 \\\\
\large e^{\ln(x)} &= \large e^{-1} \\\\
\large x &= \large e^{-1}
    \end{split}
    \end{equation}
$$

</section>

2. Etudier les limites de f en 0⁺ et en $+\infty$

<section class="hidden">

En $-\infty$ :

$$
\begin{rcases}
    \lim\limits_{x \to 0⁺ } 1+\ln(x) = -\infty \\
    \lim\limits_{x \to 0⁺ } x² = 0⁺ \\
\end{rcases} \text{par quotient: } \lim\limits_{x \to 0⁺} f(x) = -\infty
$$

---

En $+\infty$ :

On est en présence d'une forme indéterminée, du type: "$\large\frac {\infty}{\infty}$".

$$
\large f(x) = \large\frac{1}{x²} + \large\frac{\ln(x)}{x²}
$$

$$
\begin{rcases}
    \lim\limits_{x \to 0⁺ } \frac{1}{x²} = 0 \\
    \lim\limits_{x \to 0⁺ } \frac{\ln(x)}{x²} = 0 \text{(C.C)} \\
\end{rcases} \text{par somme:} \lim\limits_{x \to +\infty} f(x) = 0
$$

</section>


3. Démontrer que le maximum de $f$ est égal à $\large \frac{e}{2}$


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
