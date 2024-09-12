<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <title>Document</title>

</head>
<body>

<!-- Toda vez que for utilizar php se inicia com o código abaixo -->
<?php 

// echo é o comando que exibe texto na tela para o usuário.
echo "Olá mundo!";

// Dentro do echo, podemos quebrar a linha adicionando a tag do HTML.
echo '<br> Olá mundo com aspas simples!';

// Podemos add também tags de texto do HTML.
echo "<h1>Testando um título H1</h1";

// Toda vez que for finalizar o php se finaliza com o código abaixo.
 ?>

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellendus 
    <h1> 
        <?php echo "Testando o php no meio de html" // Quando houver apenas uma linha de php, não será necessário colocar ponto e vírgula ?> 
    </h1> 
    reprehenderit accusamus culpa ipsa animi obcaecati hic dolor iusto. Ullam officiis nulla sequi modi reiciendis cum, blanditiis ut quaerat deserunt.
</P>


</body>
</html>