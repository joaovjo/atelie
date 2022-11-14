<?php

//Iremos fazer a conexão com o banco de dados nas formas:
// constante
define('servidor', 'localhost');
define('usuario', 'root');
define('senha', '');
define('banco', 'atelie');
define('porta', '3306');

// procedural
//função  para fazer a conexão ao banco com os parametros
$banco = mysqli_connect(servidor, usuario, senha, banco, porta);

// verificar se ha conexão com o servidor caso haja mostra uma mensagem

//mysqli_connect_erro() - mostra um mensagem (string ) sobre o motivo de conexão
//mysqli_connect_errno() - mostra um codigo ao inves de string de erro;

if (!$banco) {
    die("Falha na conexão, motivo : " . mysqli_connect_error());
} else {
    // echo "Conexão feita com sucesso !!! Bora Bill";
}

// Orientação Objeto

// $OOP = new mysqli(servidor, usuario, senha, banco, porta);

// if($OOP->connect_errno){
//     die("Falha" . $OOP->connect_errno);
// }else{
//     echo "conectou!";
// }

// PDO


// //namespace App\Configuracao;
// class Servidor
// {

//     private  $servidor = 'localhost';
//     private  $usuario = 'root';
//     private  $senha = '';
//     private  $banco = 'atelie';
//     private  $porta = '3306';
//     private $OOP;

//     //Iremos fazer a conexão com o banco de dados nas formas:
   
//     public function banco()
//     {
//         // Orientação Objeto

//         $OOP = new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco, $this->porta);

//         if ($OOP->connect_errno) {
//             die("Falha" . $OOP->connect_errno);
//         } else {
//             echo "conectou!";
//             return $OOP;
//         }
//     }
// }

// PDO

// class Servidor {
//     private const servidor = 'localhost'; //Constantes podem ser publicas ou privadas
//     private const usuario = 'root';
//     private const senha = '';
//     private const banco = 'atelie';
//     private const porta = '3306';
    
//     function __construct() {
//         $this->Conectar();
//     }

//     public function Conectar() {//Sempre que chamar uma constante dentro da classe, referenciar a ela usando self::constante
//         $conexao = new mysqli(self::servidor, self::usuario, self::senha, self::banco, self::porta);

//         if ($conexao->connect_errno) {
//                         die("Falha" . $conexao->connect_errno);
//                     } else {
//                         echo "Conex&atilde;o feita com sucesso!";
//                         return $conexao;
//                     }
//     }
// }