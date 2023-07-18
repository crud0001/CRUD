<?php
    session_start();

    include "config.php";

    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['email']))
    {
        header('Location: login.php');
    }

    else{

        $login = $_POST["nome"];
        $senha = $_POST["senha"];
        $scodif = md5($senha);

       $sql = $conn->prepare("SELECT * FROM usuarios WHERE nome = :login and senha = :senha" );
       $sql->bindParam(':login',$login);
       $sql->bindParam(':senha',$scodif);
       $sql->execute();
       $result = $sql->fetch(PDO::FETCH_ASSOC);
      
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            $_SESSION['adm'] = $result['adm'];
       

       if(!empty($result)){

        // print_r($result['adm']);die;

       if($result['adm'] == 1) { 

            header('Location: index.php?page=novo');

        } else {

            header('location: index.php?page=listar');
            
        }
       
       }else{
 
           header('Location: login.php');
            
       }
 
    }
?>