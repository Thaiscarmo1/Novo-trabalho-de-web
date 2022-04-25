<?php
include_once("conexao.php");
include_once("Crud.php");

$obj = new Crud($conn);

$dado = $obj->getAll();

echo "<body><table border='1' id='tabela'>";
echo "<tr> <th> Nome</th><th> Idade </th> <th> E-mail </th><th> Data</th><th> Editar </th></tr>";

foreach($dado as $info){
    echo "<tr><td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td>
    <td><a href=formEdit.php?id=".$info['id'].">Editar</a></td></tr>";

    
}
echo "</table></body>";
