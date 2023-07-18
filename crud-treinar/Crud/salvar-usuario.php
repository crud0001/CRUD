<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];


        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) 
                VALUES (
               '{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";


        $nome = $_POST['nome'];

        if (strlen(trim($nome)) < 4) {
        echo '<script>alert("O nome deve ter pelo menos 4 letras."); history.back();</script>';
        exit; 
        } 

        $senha = $_POST['senha'];

        if (strlen(trim($senha)) < 5) {
        echo '<script>alert("A senha deve ter pelo menos 5 caracteres."); history.back();</script>';
        exit; 
        }

        $res = $conn->query($sql);
        
        if($res==true) {
            echo "<script>alert('Cadastrado com Sucesso')</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else{
            echo "<script>alert('Não foi possivel Cadastrar')</script>";
            echo "<script>location.href='?page=listar';</script>";
        }


            break;
        
        case 'editar';
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];    

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}'
                WHERE id=".$_REQUEST["id"];

            $nome = $_POST['nome'];

            if (strlen(trim($nome)) < 4) {
            echo '<script>alert("O nome deve ter pelo menos 4 letras."); history.back();</script>';
            exit; 
            } 

            $senha = $_POST['senha'];

            if (strlen(trim($senha)) < 5) {
            echo '<script>alert("A senha deve ter pelo menos 5 caracteres."); history.back();</script>';
            exit; 
            }

            $res = $conn->query($sql);
        
        if($res==true) {
            echo "<script>alert('Editado com Sucesso')</script>";
            echo "<script>location.href='?page=listar';</script>";
        }else{
            echo "<script>alert('Não foi possivel Editar')</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
            break;

        case 'excluir';
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
        
            if($res==true) {
                echo "<script>alert('Excluido com Sucesso')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel Excluir')</script>";
                echo "<script>location.href='?page=listar';</script>";
            }

            break;
    }