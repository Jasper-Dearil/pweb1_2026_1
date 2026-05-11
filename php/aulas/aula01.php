<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>
<body>
    <?php 
        echo "Olá Mundo PHP! <br>";

        $nome = "Jasper";
        $idade = 18;
        echo "Nome: $nome Idade: $idade <br>";

        if($idade < 18) {
        echo "Menor <br>";
        } else {
        echo "Maior <br>";
        }

        $notas = [5, 7, 10, 9];

        print_r($notas);

        for($i = 0; $i < count($notas); $i++) {
            echo $notas[$i] . "<br>";
        }

        foreach($notas as $item) {
            echo $item . "<br>";
        }

        $nomes = ["Jasper", "Nubi", "Nina"];

         for($i = 0; $i < count($nomes); $i++) {
            echo $nomes[$i] . "<br>";
        }

        foreach($nomes as $item) {
            echo $item . "<br>";

        }

        $carro = ['modelo'=>"Mustang", 'cor'=>"branco", 'ano'=>2026];    
        echo $carro['modelo'] . " - " . $carro['cor'];
    ?>

    <P> Meu site <?= $carro['modelo'] . " - " . $carro['ano'] ?></P>

    <?php 
    include "./aula02.php"
    
    ?>
</body>
</html>