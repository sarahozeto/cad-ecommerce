<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastrar marca</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body>
    <header> 
        <div class="center">
            <h1>Cadastro de Marca</h1>
            <a href="index.php" target="_self"> Voltar </a>
        </div>
    </header>
        <section id="produtos">
            <form action="insere-marca.php" method="post">
                <label for="">Descrição</label>
                <input type="text" name="descricao">
                <input type="submit" value="Cadastrar">
            </form>
        </section>
</body>
</html>