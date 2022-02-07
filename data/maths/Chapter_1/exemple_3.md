# Exemple 3 - Type DS

$u_n=0,5$

$u_{n+1} = 0,5u_n+0,3$

$V_n=u_n-0,6$


a) Démonter que pour tout n de $I\!N$, $0 \le u_n \le 0,6$ (Soit minoré par 0 et majoré par 0,6).

<section class="hidden">

Vérifions que la propriété est vraie au rang initial.

$$
u_0=0,5 
\text { donc : } 0 \le u_0 \le 0,6
$$


Supposons que pour un rang n de $I\!N$, $0 \le u_n \le 0,6$, démontrons alors que : $0 \le u_{n+1} \le 0,6$.


On a :
$$
    \begin{array}{rcl}
    0 \le& u_n &\le 0,6 \\
    0 \le& 0,5u_n &\le 0,3 \\
    0,3 \le& 0,5u_n+0,3&\le 0,6 \\
    0 \le 0,3 \le& u_{n+1} &\le 0,6
    \end{array}
    \qquad {\text{(HDR)}}
$$

Conclusion on a démontré par réccurence que $\forall n\in \rm I\!N,$ $0 \le u_n \le 0,6$.

</section>

b) Démontrer que $(V_n)$ est une suite géométrique de raison $q=0,5$.

<section class="hidden">

Il faut prouver que : $V_{n+1} = u_{n+1} -0,6$.

$$
\begin{array}{ll}
   V_{n+1} &= u_{n+1}-0,6 \\
           &= 0,5u_n + 0,3-0,6 \\
           &=0,5u_n-0,3
\end{array}
$$

or : $u_n=V_n+0,6$

donc : 
$$
\begin{array}{ll}
u_{n+1} &= 0,5(V_n+0,6) -0,3 \\
        &= 0,5V_n+0,3-0,3 \\
        &=0,5V_n
\end{array}
$$

donc $(U_n)$ est une suite géométriqye de raison $q=0,5$ et de premier terme \
$V_0=u_0-0,6$ \
$V_0=0,5-0,6$ \
$V_0 =-0,1$

</section>

c) Exprimer alors $V_n$ en fonction de n.

<section class="to-know">

Rappels sur les unités géométriques :

$V_n = V_0\times q^n$ \
$V_n = V_1\times q^{n-1}$

</section>

<section class="hidden">

$$
\begin{array}{ll}
V_n=V_0\times q^n \\
V_n=-0,1\times (0,5)^n
\end{array}
$$

</section>