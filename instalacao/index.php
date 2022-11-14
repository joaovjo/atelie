<?php

include_once "../config.php";

// $sqlEndereco = "CREATE TABLE IF NOT EXISTS endereco (
//     id_end BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     cep varchar(9) NULL,
//     logradouro varchar(255) NOT NULL UNIQUE,
//     numero int null,
//     complemento varchar(255),
//     bairro varchar(255) NOT NULL,
//     cidade varchar(255) NOT NULL,
//     estado varchar(2) NOT NULL
//     ) ENGINE = InnoDB DEFAULT CHARSET=utf8";

// $sqlCliente = "CREATE TABLE IF NOT EXISTS cliente (
//     id_cliente bigint not null AUTO_INCREMENT PRIMARY KEY,
//     nome varchar(100) not null,
//     email varchar(255) NOT NULL unique,
//     senha varchar(255) NOT NULL,
//     telefone varchar(20) NOT NULL,
//     end_id bigint not null,
//     foreign key (end_id) REFERENCES endereco(id_end)
// ) ENGINE = InnoDB DEFAULT CHARSET=utf8";

///////////////////////////////////////////////////////

$sqlCliente = "CREATE TABLE IF NOT EXISTS clientes (
    id_cliente bigint not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    email varchar(255) NOT NULL unique,
    senha varchar(255) NOT NULL,
    telefone varchar(20) NOT NULL,
    cep varchar(8) NULL,
    logradouro varchar(255) NOT NULL,
    numero int null,
    complemento varchar(255),
    bairro varchar(255) NOT NULL,
    cidade varchar(255) NOT NULL,
    estado varchar(2) NOT NULL,
    foto varchar(255) null
) ENGINE = InnoDB DEFAULT CHARSET=utf8";



$sqlProduto = "CREATE TABLE IF NOT EXISTS produtos (
    id_produto bigint not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    descricao varchar(255) NOT null,
    preco decimal(15,2) NOT NULL,
    qtd int not null,
    img varchar(255) null
) ENGINE = InnoDB DEFAULT CHARSET=utf8";

$sqlPedido = "CREATE TABLE IF NOT EXISTS pedidos (
    id_pedido bigint not null AUTO_INCREMENT PRIMARY KEY,
    data_pedido datetime NOT NULL,
    cliente_id bigint not null,
    foreign key (cliente_id) references clientes(id_cliente)
) ENGINE = InnoDB DEFAULT CHARSET=utf8";

$sqlPedidoProduto = "CREATE TABLE IF NOT EXISTS pedidos_produtos (
    id_ped_prod bigint not null auto_increment PRIMARY KEY,
    total decimal(15,2) NOT NULL,
    qtd int not null,
    desconto decimal(15,2) NOT NULL,
    obs varchar(500),
    pedido_id bigint NOT NULL,
    produto_id bigint NOT NULL,
    foreign key (pedido_id) references pedidos(id_pedido),
    foreign key (produto_id) references produtos(id_produto)
) ENGINE = InnoDB DEFAULT CHARSET=utf8";

$sqlUsuario = "CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario bigint not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(255) NOT NULL,
    cargo_usuario varchar(255) NOT NULL,
    ativo boolean NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET=utf8";

// $OOP->query($sqlEndereco);
mysqli_query($banco, $sqlCliente);
mysqli_query($banco, $sqlProduto);
mysqli_query($banco, $sqlPedido);
mysqli_query($banco, $sqlPedidoProduto);
mysqli_query($banco, $sqlUsuario);