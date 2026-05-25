<?php


include_once '../database/db.class.php';


$conn = new db("aluno");


$dados = [
    'nome'=> "Elelen",
    'telefone' => "4433",
    'email' => "ellen@gmqilc.pm",
];
$conn->store($dados);


echo "inserido bem rui";


?>
