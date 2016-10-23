<?php

$a = 'Por valor';
$b = &$a; // Criando a referência para $a

$a = 'E agora ?';

print $a; // E agora ?
print $b; // E agora ?