<?php
    $distancia = 20;
    $tempoDeviagem = 4;

    $velocidadeMedia = $distancia / $tempoDeviagem;

    $distancia= $tempoDeviagem * $velocidadeMedia;
    $litroUsado = $distancia/12;

    printf ("Distacia: ".$distancia);
    printf ("<br> A velocidade média é: ".$velocidadeMedia);
    printf ("<br> A quantidade de litros usados é: ".$litrosUsado);
    
?>