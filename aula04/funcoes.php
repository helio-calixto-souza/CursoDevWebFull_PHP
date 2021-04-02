<?php

$variavelComum = 'oi';
var_dump($variavelComum); //funcao de DEBUG para identificar o tipo da variavel

echo($variavelComum);
echo nl2br("\n");   // Imprime uma quebra de linha
echo($variavelComum);
echo nl2br("\n");  

echo "<br>";
$variavelComum = 1;
var_dump($variavelComum);
echo nl2br("\n"); 
const EXEMPLO_DE_CONSTANTE = 'Testando o uso de uma constante';
echo EXEMPLO_DE_CONSTANTE;
echo nl2br("\n"); 
// PSR padrao para nomeclatura de variáveis

$variavelArray =  array();
$variavelArray[]="carrinho";
$variavelArray[]="estilingue";
$variavelArray[]="boneca";

echo('Exibino array normal');
print_r($variavelArray);
echo nl2br("\n"); 
echo('Exibino array preformatado');
echo "<pre>";  // tag utilizada pra utilizar texto pre-formatado
print_r($variavelArray);
echo "</pre>";

echo nl2br("\n"); 

//$arrayAssociativo =array();

$arrayAssociativo = array(
    "Fruta"=>"Banana",
    "Carro"=>"Tesla" ,   
    "Escola"=>"UFMG"
);

echo "<pre>";  
print_r($arrayAssociativo);
echo "<pre>";  


echo nl2br("\n"); 
$arrayUsuarios = array();
$arrayHelio = array(
       "nome"     => "Hélio"
    ,  "telefone" => "31 999571390"
    ,  "email"    => "helio@portinfo.com.br"
);
echo "<pre>";  
print_r($arrayHelio);
echo "</pre>"; 

echo nl2br("\n"); 
array_push($arrayUsuarios,$arrayHelio);
echo "<pre>";  
print_r($arrayUsuarios);
echo "</pre>"; 

echo nl2br("\n"); 
$arrayKenia = array(
    "nome"     => "Kenia"
 ,  "telefone" => "31 9999999999"
 ,  "email"    => "kenia@portinfo.com.br"
);
echo "<pre>";  
print_r($arrayKenia);
echo "</pre>"; 

echo nl2br("\n"); 
array_push($arrayUsuarios,$arrayKenia);
echo "<pre>";  
print_r($arrayUsuarios);
echo "</pre>"; 
echo('helio');
foreach( $arrayUsuarios as $key => $usuario) {
    echo $key;
    echo nl2br("\n"); 
    print_r($usuario);
    echo nl2br("\n"); 
}

foreach( $arrayUsuarios as $key => $usuario) {
echo $usuario["nome"];
echo nl2br("\n");
}

foreach( $arrayUsuarios as $key => $usuario) {
    echo "   Nome:     ".$usuario["nome"]
       . " | Telefone: ".$usuario["telefone"]
       . " | Email:    ".$usuario["email"]
       ;
    echo nl2br("\n");
    echo nl2br("\n");
}

$usuariosJson = json_encode($arrayUsuarios);
echo $usuariosJson;

echo nl2br("\n");
echo nl2br("\n");
var_dump($usuariosJson);
echo nl2br("\n");
echo nl2br("\n");

foreach( json_decode($usuariosJson) as $key => $usuario) {
    echo "    Nome: "    .$usuario->nome
       .  " | Telefone: ".$usuario->telefone
       .  " | Email: "   .$usuario->email
       ;
  
    echo nl2br("\n");
    echo nl2br("\n");   

}

echo count($arrayUsuarios);

for( $i=0; $i < count($arrayUsuarios) ; $i++){

    echo  "   Nome:     ".$arrayUsuarios[$i]["nome"]
        . " | Telefone: ".$arrayUsuarios[$i]["telefone"]
        . " | Email:    ".$arrayUsuarios[$i]["email"]
        ;
    echo nl2br("\n");
    echo nl2br("\n");  
}

echo checkdate('1','1','2099');

if(checkdate('1','1','2019')){
    echo "VAlidado";
}else {
    echo "Inválida";
}


$today =  date( "Y-m-d H-i-s");
var_dump($today);

$dia = date( "Y-m-d ");
var_dump($dia);
$hora = date( "H-i-s");
var_dump($hora);

$numeros = array(3,4,6,7);

function somar($arrayParaSoma) {
    $resultado = 0;
    foreach( $arrayParaSoma as $key => $numero ){
        $resultado += $numero ;
    }
        return $resultado;
}
echo somar($numeros);

echo nl2br("\n");
echo nl2br("\n");

$palavras =  array("Fomos ", "tomar ", "café.");
function montarFrase($arrayPalavras) {
    $frase = '';
    foreach($arrayPalavras as $key => $palavra) {
        $frase .= $palavra;
    }
    return $frase;
}

echo nl2br("\n");
echo nl2br("\n");


echo montarFrase($palavras);
$testeRetiraAcentos = "Hoje é feriadão";
function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$string);
    }

    echo tirarAcentos($testeRetiraAcentos);

echo nl2br("\n");
echo nl2br("\n");

echo utf8_encode($testeRetiraAcentos);

echo utf8_decode($testeRetiraAcentos);

$stringSemAcento2 = "Hoje é feriadão";
echo strtoupper($stringSemAcento2);

echo nl2br("\n");
echo nl2br("\n");

$observacao = "o pedido deve ser entregue até sexta";

echo ucfirst($observacao);
$nome = "kenia ferreira de jesus";
echo ucwords($nome);





