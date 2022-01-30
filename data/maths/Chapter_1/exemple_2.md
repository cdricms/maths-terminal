# Exemple 2 - Type DS

$u_n=90$

$u_{n+1} = 0,85u_n+6$

a) Calculer $u_1$.

<section class="hidden">

$$
   \begin{array}{ll}
    u_1 &= 0,85\times90+6 \\
         &= 76,5+6 \\
         &= 82,5
   \end{array}
$$

</section>

b) Démonter par réccurence que pour tout n de $I\!N$, $u_n \ge u_{n+1}$.

<section class="hidden">

Vérifions que la propriété est vraie au rang initial.

$$
\begin{rcases}
    u_0=90 \\
    u_1=82,5
\end{rcases} u_n \ge u_1
$$


Supposons que pour un rang n de $I\!N$, $u_n \ge u_{n+1}$, démontrons alors que : $u_{n+1} \ge u_{n+2}$.


On a :
$$
    \begin{equation}
    \begin{split}
    u_n     &\ge u_{n+1} \\
    0,85u_n &\ge 0,85u_{n+1} \\
0,85u_n +6  &\ge 0,85u_{n+1}+6 \\
    u_{n+1} &\ge u_{n+2}
    \end{split}
    \end{equation}
$$

Conclusion on a démontré par réccurence que $\forall n\in \rm I\!N,$ $u_n \ge _{n+1}$.

</section>