<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <h1>Introdução à programação backend</h1>

    <?php
    echo 'Olá, José';
    echo '<br/>';

        //cria uma variavel chamada ano_nascimento
        $ano_nascimento = 1992;

        //cria uma variavel chamada ano_atual, que armazena o ano em que estamos
        $ano_atual = 2024;

        //criamos uma variavel para armazenar a idade da pessoa,
        //realizamos um calculo de substração entre o ano atual e o ano de nascimento
        $idade = $ano_atual - $ano_nascimento;

        //exibimos a idade da pessoa
        //no php, o caracter ponto "." concatena (junta) strings
        echo 'Você possui '. $idade . ' anos.';

    ?>
<br>
    <a href="formulario.php">Ir para o formulário</a>
</body>
</html>