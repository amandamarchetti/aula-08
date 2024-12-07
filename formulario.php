<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉêÊàÀáÁãÃíÍóÓôÔõÕúÚçÇ]+\s?[A-Za-zéÉêÊàÀáÁãÃíÍóÓôÔõÕúÚçÇ]*$" placeholder="ex: João Carlos"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone"/>

        <label>Digite seu email:</label>
        <input type="email" name="email" required minlength="2" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"/>

        <input type="submit" value="Enviar para o servidor">

    </form>
    </pre>
    <hr/>

    <?php
        $nome = '';

        //Olá, <nome>! Seja bem-vindo(a).
        if(isset($_POST['nome'])){ //isset é uma função do PHP que verifica se há valor em uma variável

            //estamos atribuindo o valor do campo "nome" digitado no formulario
            //à nossa variavel chamada $nome
            $nome = $_POST['nome'];

            //estamos imprimindo a mensagem de boas vindas
            //concatenamos uma string constante com a variavel "$nome"
            echo '<p>Olá, '. $nome .'! Seja bem vindo(a).</p>';
        }

    ?>
</body>
</html>