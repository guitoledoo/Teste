<header>
<h3>CONTATOS</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo Contato</a>
</div>
<div class="tabela">
<table class="table table-dark table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>SEXO</th>
            <th>DATA DE NASCIMENTO</th>
            <th>Editar</th>
            <th>Excluir</th>

        </tr>

    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM tbcontatos";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rs)){

    
    ?>
    <tr>
            <td><?= $dados["idContato"] ?></td>
            <td><?= $dados["nomeContato"] ?></td>
            <td><?= $dados["emailContato"] ?></td>
            <td><?= $dados["telefoneContato"] ?></td>
            <td><?= $dados["sexoContato"] ?></td>
            <td><?= $dados["dataNascContato"] ?></td>
            <td><a href="index.php?menuop=editar-contato&idContato=<?= $dados["idContato"] ?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-contato&idContato=<?= $dados["idContato"] ?>">Excluir</a></td>

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>