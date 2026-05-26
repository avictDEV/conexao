<?php

class Conexao {

    private $host = 'localhost';
    private $banco = 'biblioteca_profissional';
    private $usuario = 'root';
    private $senha = 'jesus';

    public function conectar() {

        try {

            $pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->banco};charset=utf8",
                $this->usuario,
                $this->senha
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            echo "<h1>Conectado com sucesso ao banco de dados!</h1>";

            return $pdo;

        } catch(PDOException $erro) {

            echo "<h1>Erro na conexão:</h1>";
            echo $erro->getMessage();

        }

    }

}

$conexao = new Conexao();

$db = $conexao->conectar();


$sql = "SELECT * FROM usuarios";
$resultado = $db->query($sql);

?>