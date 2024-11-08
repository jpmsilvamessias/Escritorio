<?php

require_once('./class/Item.php');
require_once('./class/Pasta.php');
require_once ('./class/Objeto.php');
require_once('./class/Gaveta.php');
require_once('./class/Documento.php');
require_once('./class/Armario.php');
require_once('./class/Escritorio.php');


$documento1 = new Documento("Contrato", "Contrato em pdf", "2024-01-01");
$documento2= new Documento("Holerite","fisico","2024-02-05");
$objeto1 = new Objeto("Calculadora", "Calculadora", 0.5);
$pasta1 = new Pasta("Pasta Arquivo", "contratados ", "RH");


$gaveta1 = new Gaveta();
$gaveta2= new Gaveta();
$gaveta1->adicionarItem($documento1);
$gaveta1->adicionarItem($objeto1);
$gaveta1->adicionarItem($pasta1);
$gaveta2->adicionarItem($documento2);


$gaveta1->removerItem("Contrato");
$armario1 = new Armario();
$armario1->adicionarGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta2);



$escritorio = new Escritorio();
$escritorio->adicionarArmario($armario1);


$escritorio->auditoria();

