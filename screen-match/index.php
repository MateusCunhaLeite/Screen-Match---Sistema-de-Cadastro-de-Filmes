<?php 

require "src/funcoes.php";

echo "Bem vindo(a) ao screen match!\n";


$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarock";
$nomeFilme = "Se beber não case";
$anoLancamento = 2022;
$quantidadeDeNotas = $argc -2; # O $argc significa contar oque tanto foi passado no script, aqui no caso quantas notas foram passadas e ele fica -1 por conta de que o comando $argc conta o nome do docuemnto também, então para tirar essa parte de contar o documento colocamos -1.

$notas = [];
for ($contador = 1; $contador < $argc; $contador ++){
    $notas[] = (float) $argv[$contador];
} 

var_dump($notas);
#Dentro do for vc tem a parte de iniciar que é por onde começa, logo em seguida temos a expressão que seria o $contador < $argc, aqui ele verifica se o $contador é menor do que as quantidades de notas que foram inseridas pelo usuário, se for verdadeiro ele executa a próxima etapa, que seria o $contador += 1, nesta etapa ele incrementa o + 1 dentro loop, para executar novamente, e o loop apenas é encerrado quando o $contador < $argc é falso.

#$contador = 1;
#while ($argv[$contador != 0]) {
#   $somaDeNotas += $argv[$contador++];
#} 
#Aqui está como o while funcionaria nesse código, caso eu não quissese usar o for

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "O nome do filme é: $nomeFilme 
A nota do filme é: $notaFilme 
O ano de lançamento do filme é $anoLancamento" ;

exibeMensagemLancamento($anoLancamento);

 
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarock" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"    
};

echo "\n O gênero do filme é : $genero.\n";

$filme = criaFilme(nome: "Thor : Ragnarock",
 anoLancamento: 2021,
  nota: 7.8, 
  genero: "super-herói"
);


echo $filme ["ano"];
var_dump($notas);
sort($notas);
$menorNota = min($notas);
echo $menorNota;

var_dump($filme ['nome']);
$posicaoDoisPontos = strpos($filme['nome'],':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0,$posicaoDoisPontos));

#Jogando para o meu arquivo JSON
$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson); #Aqui ele está dando o meu caminho do meu arquivo json, para ser inserido o conteúdo da minha variável $filme, o




?>