<?php
include 'inc/header.inc.php';
include 'classes/contato.class.php';

$contato = new Contato();
?>
<h1>Agenda Senac 2025</h1>
<button><a href="adicionarContato.php">ADICIONAR</a></button>

<table border="3" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>ENDEREÇO</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>REDE SOCIAL</th>
        <th>PROFISSÃO</th>
        <th>NASCIMENTO</th>
        <th>FOTO</th>
        <th>ATIVO</th>
        <th>AÇÕES</th>
    </tr>
    <?php
    $lista = $contato->listar();
    foreach($lista as $item):
    ?>
    <tbody>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $item['nome'];?></td>
            <td><?php echo $item['endereco'];?></td>
            <td><?php echo $item['email'];?></td>
            <td><?php echo $item['telefone'];?></td>
            <td><?php echo $item['redeSocial'];?></td>
            <td><?php echo $item['profissao'];?></td>
            <td><?php echo $item['dtNasc'];?></td>
            <td><?php echo $item['foto'];?></td>
            <td><?php echo $item['ativo'];?></td>
            <td>
                <a href="editarContato.php?id=<?php echo $item['id']?>">EDITAR </a>
                <a href="#">| EXCLUIR</a>
            </td>
        </tr>
    </tbody>
    <?php
    endforeach;
    ?>

</table>


<?php
include 'inc/footer.inc.php';
?>