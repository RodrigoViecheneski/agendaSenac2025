<?php
include 'classes/contato.class.php';
$contato = new Contato();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $redeSocial = $_POST['redeSocial'];
    $profissao = $_POST['profissao'];
    $dtNasc = $_POST['dtNasc'];
    $foto = $_POST['foto'];
    $ativo = $_POST['ativo'];
    $id = $_POST['id'];

    if(!empty($email)){
        $contato->editar($nome, $endereco, $email, $telefone, $redeSocial, $profissao, $dtNasc, $foto, $ativo, $id);
    }
    header("Location: /agendaSenac2025");
}
?>