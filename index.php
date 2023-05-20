<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/formulario.css'>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="cadastrar.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
