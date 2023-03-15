<?php
    switch($_REQUEST["acao"]){
        case 'matricula':
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $genero = $_POST['genero'];
            $serie = $_POST['serie'];
            

$sql = "INSERT INTO alunos (id,nome,idade,genero,serie) VALUES ('{$id}', '{$nome}', '{$idade}', '{$genero}', '{$serie}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('cadastro com sucesso');</script>;";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }








            break;

        case 'editar':

            break;

        case 'excluir':
            break;
    }





?>