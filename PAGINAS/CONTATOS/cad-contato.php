<header>
    <h3>Cadastro de contato</h3>
</header>
<div>
    <form action="index.php?menuop=inserir-contato" method="post">
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato">    
    </div>

    <div>
        <label for="emailContato">E-mail</label>
        <input type="email" name="emailContato">   
    </div>

    <div>
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato">   
    </div>

    <div>
        <label for="sexoContato">Sexo</label>
        <input type="text" name="sexoContato">   
    </div>

    <div>
        <label for="dataNascContato">Data de nascimento</label>
        <input type="date" name="dataNascContato">       
    </div>

    <div>
        <input type="submit" value="Adicionar" name="btnAdcionar">
    </div>

</form>
</div>
