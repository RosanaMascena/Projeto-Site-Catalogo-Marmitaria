<?php

$pratos[1] = array("nome" => "Prato 1", "tamanho" => "Média", "preco" => "R$15,90", "img" => "./img/Frango-a-milanesa-salada-e-arroz.jpg");
$pratos[1]["ingredientes"] = array("frango a milanesa", "salada", "arroz");
$pratos[2] = array("nome" => "Prato 2", "tamanho" => "Grande", "preco" => "R$17,90", "img" => "./img/Arroz-carne-de-panela-e-fritas.jpg");
$pratos[2]["ingredientes"] = array("arroz", "carne de panela", "fritas");

$conteudo = "";

if(isset($_GET["prato"])){
    $prato = $pratos[$_GET["prato"]];
    $div_prato .= '<div class="pratos">' . $prato["nome"];
    $div_prato .= "-" . $prato["tamanho"];
    $div_prato .= "-" . $prato["preco"];
    $div_prato .= '<img src="' . $prato["img"] . '" />';
    $div_prato .= "</div>";

    foreach($prato["ingredientes"] as $ing){
        $div_prato .= "<span>";
        $div_prato .= $ing . "</span>";
    }
    $conteudo = $div_prato;
}else{
    foreach($pratos as $chave => $valor){
        $divs_pratos .= '<div class="pratos">' . $chave;
        $divs_pratos .= "-" . $valor["nome"];
        $divs_pratos .= "-" . $valor["preco"];
        $divs_pratos .= '<a href="./index.php?prato=' . $chave . '"><img src="' . $valor["img"] . '" /></a>';
        $divs_pratos .= "</div>";
    
        foreach($valor["ingredientes"] as $ing){
            $divs_pratos .= "<span>";
            $divs_pratos .= $ing . "</span>";
        }
    }
    $conteudo = $divs_pratos;
}

include("./html/cabecalho.php");
include("./html/banner.php");
echo $conteudo;
include("./html/rodape.php");

?>