<?php
/* Renomeia o Arquivo */
rename('teste.txt', 'teste2.txt');
/* para mudar a pasta do arquivo devemos colocar o caminho */
rename('teste.txt', 'pastaTal/teste.txt');
/* Para gerar uma cópia */
copy('pastaTal/teste.txt', 'texte.txt');