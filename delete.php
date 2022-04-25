<?php
  include_once("conexao.php");
  include_once("Crud.php");
  
  extract($_GET);
  $obj = new Crud($conn);

  $obj->deleteDados($id);