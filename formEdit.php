<?php
include_once("conexao.php");
include_once("Crud.php");

extract($_GET);

$obj = new Crud($conn);

$dado = $obj->readInfo($id);


?>

<body>
  
<form action="update.php" method="post">

  <p> Nome: <input type="text" name="nome" value="<?=$dado->nome;?>"></p>
  <p> Idade: <input type="number" name="idade" value="<?=$dado->idade;?>"></p>

  <p> E-mail: <input type="text" name="mail" value="<?=$dado->email;?>"></p>
  <input type="hidden" name="id" value="<?=$dado->id;?>">

  <button type="submit" name="alterarDados">Alterar Dados</button>

</form>
</body>