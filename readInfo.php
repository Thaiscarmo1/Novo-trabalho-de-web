<?php
include_once("conexao.php");
include_once("Crud.php");
extract($_POST);


 $obj = new Crud($conn);

 $dado = $obj->pesquisaInfo($nomeCliente);




echo "<body><table border='1'>";
echo "<tr><th> id </th> <th> Nome</th><th> Idade </th> <th> E-mail </th><th> Data</th></tr>";

foreach($dado as $info){
    echo "<tr><td>".$info['id']."</td>
    <td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td></tr>";

    
}
echo "</table></body>";