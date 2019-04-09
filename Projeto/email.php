<?php
 $ColetaCampos = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 //variaveis que recebem os indices para poderem serem armazenados no array
 $Nome = $ColetaCampos['nome'];
 $Email = $ColetaCampos['email'];
 //$Assunto = $ColetaCampos['Assunto'];
 $Msg = $ColetaCampos['mensagem'];

//Informação para a hospedagem e envio do email
$Email_Remetente = $Msg;
$Email_Destinatario = "thiagosak@letsgrow.com.br";
$Email_reply = "{$Email}";

//Criando o email para envio
$Email_assunto = "Novo contato pelo site";
$Email_conteudo = "Nome = ($Nome) \n";
$Email_conteudo .= "Email = ($Email) \n";
$Email_conteudo .= "Assunto = ($Assunto) \n";
$Email_conteudo .= "Mensagem = ($Msg) \n";
$HeaderArray = array("From: $Email_Remetente",
    "Reply-to: $Email_reply",
    "subject: $Email_assunto",
    "Return-patch: $Email_Remetente",
    "MIME-Version:1.0",
    "X-Priority: 3",
    "Content-Type: text/html; charset=UTF-8"
);
$Email_headers = implode("\n", $HeaderArray);
//Chama a função responsavel pelo envio
if(mail($Email_Destinatario,$Email_assunto,$Email_conteudo,$Email_headers)){
    ?>
    <div>
        <p>Salvo com sucesso</p>
    </div>
    <?php
}else {
    ?>
    <div>
        <p>Opa, não deu certo tente novamente</p>
    </div>
    <?php
}