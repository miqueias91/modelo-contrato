<?php
$dados = $_POST;
echo "*************************************SALVAR O MODELO NO BD****************************<BR><BR>";
echo 'titulo=> '.$dados['titulo'];
echo "<br>";
echo "<br>";
echo "<br>";
echo 'conteudo=> '.$dados['conteudo'];
echo "<br>";




echo "<br>*************************************BUSCAR O MODELO NO BD****************************<BR><BR>";
$cpfcnpj = '143.073.950-93';
$nome = 'João Eduardo Figueiredo';
$logradouro = 'Rua Laudelino dos Santos';

$dados['conteudo'] = str_replace('{nome}', $nome, $dados['conteudo']);
$dados['conteudo'] = str_replace('{cnpj}', $cpfcnpj, $dados['conteudo']);
$dados['conteudo'] = str_replace('{logradouro}', $logradouro, $dados['conteudo']);
echo 'titulo=> '.$dados['titulo'];
echo "<br>";
echo "<br>";
echo "<br>";
echo 'conteudo=> '.$dados['conteudo'];
echo "<br>";