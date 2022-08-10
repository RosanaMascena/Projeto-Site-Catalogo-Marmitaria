<?php

$pratos[1] = array("nome" => "Prato 1", "preco" => "R$15,90", "img" => "./img/Frango-a-milanesa-salada-e-arroz.jpg");
$pratos[1]["ingredientes"] = array("frango a milanesa", "salada", "arroz");
$pratos[2] = array("nome" => "Prato 2", "preco" => "R$17,90", "img" => "./img/Arroz-carne-de-panela-e-fritas.jpg");
$pratos[2]["ingredientes"] = array("arroz", "carne de panela", "fritas");

$divs_pratos = "";

foreach($pratos as $chave => $valor){
    $divs_pratos .= '<div class="pratos">' . $chave ;
    $divs_pratos .= "-" . $valor["nome"];
    $divs_pratos .= "-" . $valor["preco"];
    $divs_pratos .= '<img src="' . $valor["img"] . '" />';
    $divs_pratos .= "</div>";

    foreach($valor["ingredientes"] as $ing){
        $divs_pratos .= "<span>";
        $divs_pratos .= $ing . "</span>";
    }
}

include("./html/cabecalho.php");
include("./html/banner.php");
echo $divs_pratos;
include("./html/rodape.php");

?>