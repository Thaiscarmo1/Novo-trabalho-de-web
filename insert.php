<?php
include_once("conexao.php");
include_once("Crud.php");

extract($_POST);

$obj = new Crud($conn);

$obj->setDados($nome,$mail,$idade);

$obj->insertDados();