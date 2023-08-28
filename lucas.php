<?php
//Calculadora PHP

    // Definindo as variáveis
    $num1 = 15;
    $num2 = 4;

    // criando um array para usar
    $arr = [15, 8, 5, 2, 25];
    //Aqui adicionei um registro ao array
    array_push($arr, 55);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Teste PHP e JS</title>
</head>
<body>
    <div class="container text-center">
        <h1>
            Aqui é meu documento de estudo de PHP e JS
        </h1>
        <div class="row">
            <div class="col-md-6">
                <h2>PHP</h2>
            </div>
            <div class="col-md-6">
                <h2>JS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Aqui esta o resultado da soma</h3>
                <?php 
                // criando a função de soma
                function soma($num1, $num2) {
                    return $num1 + $num2;
                };
                $resultado = soma(15, 25);
                echo "<p>A soma é: ".$resultado."</p>";
                echo "<br>";
                echo "<br>";
                ?>
            </div>
            <div class="col-md-6">
                <h3>Aqui esta o resultado da soma</h3>
                <p id="soma"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Resultado das consultas no array</h3>
                <?php 
                    echo "<p>Primeira consulta index 0 - ".$arr[0];
                    echo "<p>Segunda consulta index 3 - ".$arr[3];
                ?>
            </div>
            <div class="col-md-6">
                <h3>
                    Resultado das consultas no array (Continuação no Console do navegador)
                </h3>
                <p id="consultaArray"></p>
                <p id="consultaArray2"></p>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="text-center">
        <h2>Ia deixar bonito para cima, mas vi que o foco é BackEnd então parei de fazer bonito, o foco é código</h2><br><br>
    <?php 


    // criando a função como uma variável
    $subtracao = function($num1, $num2) {
        return $num1 - $num2;
    };
    $resultado = $subtracao($num1, $num2);
    echo "A subtração é: ".$resultado;
    echo "<br>";
    echo "<br>";


    // Criamos um objeto para guardar os números.
    class Numero {
        public $valor;

        public function __construct($valor){
            $this->valor = $valor; //o this se refere ao valor public, fora daqui e o valor sem o this é o que esta no constructor
        }

        public function printValor() {
            echo $this->valor;
        }
        
    }
    // aqui instanciamos o objeto
    $numero = new Numero(15);
    $numero2 = new Numero(5);
    //aqui chamamos a função dentro do objeto
    $numero->printValor();
    echo "<br>";
    $numero2->printValor();
    echo "<br>";
    echo "<br>";


    // criando a função multiplicar como uma variável
    $multiplicar = function($num1, $num2) {
        return $num1 * $num2;
    };    
    $resultado = $multiplicar(15, 5);
    echo "A multiplicação é: ".$resultado;
    echo "<br>";

    echo "Como o modulo(resto) e a divisão se aplicam os mesmo conceitos vou pular eles.";
    echo "<br>";


    //Condicionais
    $idade = 22;

    if($idade >= 18) {
        echo "Sua idade é: ".$idade.". Você é maior de idade";
    } else {
        echo "Sua idade é: ".$idade.". Você é menor de idade";
    }
    echo "<br>";



    //Percorremos o array com foreach
    echo "<br>";
    foreach ($arr as $key => $value) {
        echo $value;
        echo "<br>";
    };
    echo "<br>";echo "<br>";



    // Conectando ao banco de dados

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'banco-teste';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName );
    if ($conexao->connect_errno) {
        echo "Falha ao conectar";
    } else {
        echo "Conectado";
    }
    echo "<br><br>";

    //criando a demonstração visual da tabela do banco

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);
    ?>
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Dia</th>
                </tr>
            </thead>
            <tbody>
    <?php
    while ($user_data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo"<td>".$user_data['id']."</td>";
        echo"<td>".$user_data['nome']."</td>";
        echo"<td>".$user_data['sobrenome']."</td>";
        echo"<td>".$user_data['idade']."</td>";
        echo"<td>".$user_data['dia']."</td>";
        echo "</tr>";
    }

    ?>


<script src="./lucas.js"></script>

</body>
</html>