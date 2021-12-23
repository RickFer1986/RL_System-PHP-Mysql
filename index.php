<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo de Formulário</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="cadastro">
        <fieldset>
            <legend>Cadastro</legend>
            <form name="form-cadastro" method="GET" action="salvar.php">
                <label for="nome">Nome:</label>
                <br>
                <input type="text" name="txtNome" id="nome" required placeholder="Digite seu nome">
                <br><br>
                <label for="email">E-mail:</label>
                <br>
                <input type="email" name="txtEmail" id="email" required placeholder="example@domain.com">
                <br><br>
                <label for="cbValores">País:</label>
                <br>
                <select name="cbValores" id="cbValores">
                    <option>-- Selecione --</option>
                    <option>Brasil</option>
                    <option>Argentina</option>
                    <option>França</option>
                    <option>Alemanha</option>
                    <option>Itália</option>
                </select>
                <br><br>

                <input class="btn" type="submit" value="Cadastrar" />
                <input class="btn" type="reset" value="Limpar" />
            </form>
        </fieldset>
    </div>
</body>

</html>