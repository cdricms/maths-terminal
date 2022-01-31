# Exemple 6 - Type DS

$u_1=0,4$

$u_{n+1} = 0,2u_n+0,4$


a) Démonter que pour tout n de $I\!N^*$, $u_n \le 0,5$.

<section class="hidden">

Vérifions que la propriété est vraie au rang initial.

$$
u_1=0,4
\text { donc : } 0 \le u_1 \le 0,5
$$


Supposons que pour un rang n de $I\!N^*$, $u_n \le 0,5$, démontrons alors que : $u_{n+1} \le 0,5$.


On a :
$$
    \begin{array}{rcl}
    u_n &\le 0,5 \\ 
    0,2u_n &\le 0,1 \\
    0,5u_n+0,4&\le 0,5 \\
    u_{n+1} &\le 0,5 
    \end{array}
    \qquad {\text{(HDR)}}
$$

Conclusion on a démontré par réccurence que $\forall n\in \rm I\!N,$ $0 \le u_n \le 0,6$.

</section>

b) Déterminer  $u_{n+1}-u_n$ en fonction de $u_n$.

<section class="hidden">

$$
\begin{array}{ll}
   u_{n+1} &= (0,2u_n+0,4)-u_n \\
           &= -0,8u_n+0,4
\end{array}
$$

</section>

c) En déduire que la suite $(u_n)$ est croissante.

<section class="hidden">

On va étudier le signe $u_{n+1}-u_n$

On a : $\qquad u_{n+1}-u_n=-0,8u_n+0,4$

On a aussi :

$$
    \begin{array}{rl}
    u_n &\le 0,5 \\ 
    -0,8u_n &\le 0,1 \\
    -0,8u_n+0,4 &\le 0 \\
    u_{n+1}-u_n &\ge 0 \\
    u_{n+1} &\ge u_n
    \end{array}
$$

Donc $(u_n)$ est bien croissante.

</section>