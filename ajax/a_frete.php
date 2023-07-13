<?php

//echo 'funcionando...';



$cep_destino = trim($_POST['cep_destino']);

//echo $cep_destino;

//exit();
function calcula_frete($cep_origem, $cep_destino, $peso, $valor, $tipo_frete, $altura = 25, $largura = 50, $comprimento = 98) {

    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "&nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&nCdServico=" . $tipo_frete;
    $url .= "&sCepOrigem=" . $cep_origem;
    $url .= "&sCepDestino=" . $cep_destino;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" . $comprimento;
    $url .= "&nVlAltura=" . $altura;
    $url .= "&nVlLargura=" . $largura;
    $url .= "&nVlDiametro=0";
    $url .= "&sCdMaoPropria=s";
    $url .= "&nVlValorDeclarado=" . $valor;
    $url .= "&sCdAvisoRecebimento=s";
    $url .= "&StrRetorno=xml";
    $url .= "&nIndicaCalculo=3";

    $xml = simplexml_load_file($url);

    return $xml->cServico;
}

/* echo '<pre>';
  print_r(calcula_frete('14802175', '68925207', 5, 2000, '41106'));
  echo '</pre>'; */

$dados = calcula_frete('18273057', $cep_destino, 10, 0, '41106');

//echo "R$ ". number_format($dados->Valor,2,",",".");
echo $dados->Valor;
