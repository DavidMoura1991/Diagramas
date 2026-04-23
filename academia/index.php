<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Academia</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

    <h1>Academia Corpo e Mente</h1>

    <div class="card">
        <div class="header">
            <h3>Lista de Alunos</h3>
            <a href="cadastrar.php">
                <button class="btn-primary">+ Novo Aluno</button>
            </a>
        </div>

        <table>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM alunos");

            while($row = $result->fetch_assoc()) {
                $data_formatada = date('d/m/Y', strtotime($row['data_nascimento']));
                echo "<tr>
                        <td>{$row['nome']}</td>
                        <td>{$row['cpf']}</td>
                        <td>{$data_formatada}</td>
                        <td>{$row['telefone']}</td>
                        <td>
                            <a href='deletar.php?id={$row['id']}'>
                                <button class='btn-danger'>Excluir</button>
                            </a>
                        </td>
                    </tr>";
            }
            ?>
        </table>

    </div>

</div>

</body>
</html>