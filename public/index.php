<?php

require "../vendor/autoload.php";

use app\src\Mail;

$email = new Mail;

$nome = isset($_POST['nome'])?$_POST['nome']:"Sem nome";
$email2 = isset($_POST['email'])?$_POST['email']:"Sem e-mail";
$telefone = isset($_POST['telefone'])?$_POST['telefone']:"Sem telefone";
$assunto = isset($_POST['assunto'])?$_POST['assunto']:"Assunto padrão";
$mensagem = isset($_POST['mensagem'])?$_POST['mensagem']:"Mensagem padrão";

$corpoEmail = "
    <b>Nome</b>: $nome<br/>
    <b>E-mail</b>: $email2<br/>
    <b>Telefone</b>: $telefone<br/>
    <b>Assunto</b>: $assunto<br/>
    <b>Mensagem</b>: $mensagem<br/>
    <br/>
    Mensagem enviada a partir do formulário de contato em dominio.com.br
";

$email->setAssunto($assunto);
$email->setCorpo($corpoEmail);
$email->send();