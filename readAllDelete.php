<?php
include_once("conexao.php");
include_once("Crud.php");

$obj = new Crud($conn);

$obj->readInfo();

$dado = $obj->getAll();

echo "<body><table border='1'>";
echo "<tr> <th> Nome</th><th> Idade </th> <th> E-mail </th><th> Data</th><th> Deletar </th></tr>";

foreach($dado as $info){
    echo "<tr><td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td>
    <td><a href=delete.php?id=".$info['id'].">Deletar</a></td></tr>";

    
}
echo "</table></body>";
