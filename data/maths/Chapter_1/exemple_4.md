# Exemple 4

$u_0=6$

$u_{n+1} = 0,5u_n+3$

1. Démonter que la suite $u_n$ est majoré par 6.

<section class="hidden">

Il faut prouver que : $u_n \le 6$

Verifions que la propriété est vraie au rang initial.
$$
u_0= 6
\text { donc : }  u_0 \le 6
$$


Supposons que pour un rang n de $I\!N$, $u_n \le 6$, démontrons alors que : $u_{n+1} \le 6$.


On a :
$$
    \begin{equation}
    \begin{split}
    u_n \le 6 \\
    0,5u_n \le 3 \\
    0,5u_n+0,3\le 6 \\
    u_{n+1} \le 6
    \end{split} \qquad {\text{(HDR)}}
    \end{equation}
$$

Conclusion on a démontré par réccurence que $\forall n\in \rm I\!N,$ $0 \le u_n \le 6$.