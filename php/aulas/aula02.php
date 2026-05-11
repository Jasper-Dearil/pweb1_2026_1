<?php 

    $pessoas = [
        ["nome"=> "Nina", "idade"=>7],
        ["nome"=> "Nubi", "idade"=>4],
        ["nome"=> "Jasper", "idade"=>18],
    ];

    foreach ($pessoas as $key => $item){
        $nome = $item['nome'];
        $idade = $item['idade'];
        echo "Indice: $key Nome:$nome Idade:$idade <br>";
    }


?>