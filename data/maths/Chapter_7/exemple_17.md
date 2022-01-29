# Exemple 17 - Type BAC

## Partie A

$g(x) = x + 2 - e^x \text{sur} [0; +\infty[$

1. Limite de $g$ en $+\infty$ ?

   <section class="hidden">
   Nous sommes en présence d'une forme indéterminé, de la forme: 
   "$\infty - \infty$"

   $$
   g(x) = x(1 - \frac{e^x}{x})+2
   $$

   $$
   \begin{rcases}
      \lim\limits_{x \to +\infty} x = +\infty \\
      \lim\limits_{x \to +\infty} 1 - \frac{e^x}{x} = +\infty \text{ (C.C)}\\
      \lim\limits_{x \to +\infty} 2 = 2
   \end{rcases} \text{par règles opératoires:} \lim\limits_{x \to +\infty} g(x) = -\infty
   $$

   </section>

2. Tableau de variations de $g$.
   <section class="hidden">

   $g$ est dérivable sur $[0; +\infty[$

   $$g'(x) = 1 - e^x$$

   On résout: $1-e^x \geq 0$

   $$
   \begin{array}{lcl}
   1-e^x &\geq &0\\
   -e^x &\geq & -1 \\
   e^x &\leq &1 \\
   e^x &\leq &e⁰ \\
   x &\leq &0
   \end{array}
   $$

   <center>
   ![Tableau de variations de g](../data/maths/Chapter_7/exemple_17_A2.svg)
   </center>

   </section>

3. Démontrer que l'équation $g(x) = 0$ admet une solution unique appartenant à $[0; +\infty[$.

   <section class="hidden">

   La fonction $g$ est continue est strictement décroisstante sur $[0; +\infty[$ dans $]-\infty; 1]$, or $0 \in ]-\infty;1]$ donc d'après le théorème de la bijection: l'équation $g(x) = 0$ admet une solution unique $\alpha$ à $[0; +\infty[$.

   </section>

4. Donner un encadrement de $\alpha$ à $10^{-2}$ près.
   <section class="hidden">

   $$
   \alpha \approx 1,146 \\
   \alpha \in [1,14; 1,15]
   $$

   </section>

5. Donner le tableau de signes de la fonction $g$.
   <section class="hidden">

   <center>
   ![Tableau de signes de g](../data/maths/Chapter_7/exemple_17_A5.svg)
   </center>

   </section>

## Partie B

$f(x) = \frac{e^x - 1}{xe^x+1}$ sur $[0; +\infty[$.

1. Limite de f en $+\infty$ ?

   <section class="hidden">

   Nous sommes en présence d'une forme indéterminée, de la forme: "$\frac{\infty}{\infty}$".

   $$
    f(x) = \frac{e^x(1-\frac{1}{e^x})}{e^x(x+\frac{1}{e^x})} \lrArr \frac{1-\frac{1}{e^x}}{x+\frac{1}{e^x}}
   $$

   $$
   \begin{rcases}
     \lim\limits_{x \to +\infty} 1-\frac{1}{e^x} = 1 \\
     \lim\limits_{x \to +\infty} x+\frac{1}{e^x} = +\infty \\
   \end{rcases} \text{par quotient:} \lim\limits_{x \to +\infty} f(x) = 0 \\
   \text{alors la droite d'équation } y = 0 \text{ est une asymptote horizontale à } Cf \text{, au voisinage de } +\infty.
   $$

   </section>

2. Calculer $f'(x)$.
   <section class="hidden">

   $f$ est dérivable sur $[0;+\infty[$

   $f$ est de la forme $\frac{u(x)}{v(x)}$

   $$
   \begin{array}{ l c l }
   & \text{avec} & \\
   u(x) = e^x-1 & \text{ et } & v(x) = xe^x+1 \\
   u'(x) = e^x &  & v'(x) = 1e^x+e^xx \\
   & &= e^x(x+1)
   \end{array}
   $$

   $$
   \begin{array}{ll}
   f'(x) &= \frac{\large u'(x) \times v(x) - v'(x) \times u(x)}{\large v^2(x)} \\
              &= \frac{\large e^x(xe^x+1) - e^x(x+1)(e^x-1)}{(\large xe^x+1)²} \\
              &= \frac{\large e^x(x-e^x+2)}{\large (xe^x+1)²} \\
              &= \frac{\large e^xg(x)}{\large (xe^x+1)²}
   \end{array}
   $$

   </section>

3. Prouver que $f(\alpha) = \frac{1}{\alpha+1}$.

   <section class="hidden">

   $$
   \begin{array}{ll}
   f(\alpha) &= \frac{e^\alpha-1}{\alpha e^\alpha+1} \\\\
   \text{or } g(\alpha) &= 0 \\
   \alpha + 2 - e^\alpha &= 0 \\
   e^\alpha &= \alpha + 2
   \end{array}
   $$

   Donc:

   $$
   f(\alpha) = \frac{\alpha + 2 - 1}{\alpha (\alpha + 2) + 1}
   = \frac{\alpha + 1}{\alpha² +2\alpha + 1}
   = \frac{\alpha + 1}{(\alpha + 1)²}
   = \frac{1}{\alpha + 1}
   $$

   </section>

4. Tableau de variations de $f$. $\forall x \in [0;+\infty[$, $e^x > 0$ et $(xe^x + 1)² > 0$ donc $f'(x)$ est du signe de $g(x)$.

   <section class="hidden">

   <center>
   ![Tableau de variations de f](../data/maths/Chapter_7/exemple_17_B4.svg)
   </center>

   </section>
