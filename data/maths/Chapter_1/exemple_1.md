# Exemple 1 - Type DS

$u_n$ est définie sur $I\!N$.


$u_0 = 0$ 

$u_{n+1} = 2u_n + 1$

1. Démonter par réccurence que pour tout n de $I\!N$, $u_n = 2^n -1$.

<section class="hidden">

Vérifions que la propriété est vraie au rang initial.

$u_0 = 0 \enspace$ et $\enspace 2^0 - 1 = 1 - 1 = 0$ 

donc : $u_0 = 2^0 - 1$

Supposons que pour un rang n de $I\!N$, $u_n = 2^n - 1$, démontrons alors que : $u_{n+1} =2^{n+1} - 1$.

On a :
$$
   \begin{array}{ll}
    u_{n+1} &= 2u_n+1 \\
            &= 2(2^n-1)+1 \\
            &= 2\times2^n-2\times1+1 \\
            &= 2^{n+1}-2+1 \\
            &= 2^{n+1}-1
   \end{array}
$$

Conclusion on a démontré par réccurence que $\forall n\in \rm I\!N,$ $u_n=2^n-1$.

</section>