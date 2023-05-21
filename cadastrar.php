<?php
    include("conexao.php");
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuario(nome,email,senha) VALUES('{$nome}','{$email}','{$senhaCriptografada}')";
            $res = $conn -> query($sql);
            
            if($res == true){
                print "<script>alert('Cadastrado com sucesso')</script>";
            }else{
                print "<script>alert('Ocorreu um erro ao cadastrar.')</script>";
            
            }
        } else {
            print "<script>alert('Email invalido')</script>";
        }
    } else {
        print "<script>alert('ERROR NO CADASTRO , PREENCHA OS CAMPOS OBRIGATÓRIOS')</script>";
    }
    print "<script>location.href='index.php'</script>";
?>
