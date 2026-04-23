<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

    <h1>Cadastro de Aluno</h1>

    <a href="index.php">
        <button class="btn-primary">← Voltar</button>
    </a>

    <div class="card">

        <form action="salvar.php" method="POST">

            Nome:
            <input type="text" name="nome" required>

            CPF:
            <input type="text" name="cpf" required>

            Data de Nascimento:
            <input type="date" name="data_nascimento">

            Telefone:
            <input type="text" name="telefone">

            <button class="btn-success">Cadastrar</button>

        </form>

    </div>

</div>

</body>
</html>