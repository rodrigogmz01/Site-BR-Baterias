<?php
$origem = $_POST["origem"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$ddd = $_POST["ddd"];
$celular = $_POST["celular"];
$obs = $_POST["obs"];

$email = preg_replace("/\r/", "", $_POST['email']);
$email = preg_replace("/\n/", "", $_POST['email']);

#Destinatario - e-mail escolhido
$to  = "brbaterias.pe@gmail.com"; // note the comma

#Assunto do e-mail
$assunto = "Solicitação de Orçamento - Site";

		#Montando o Header do E-mail1
		$headers = "From: $nome <$email >\n";
		$headers .= "Return-Path: $nome <$nome>\n"; // return-path
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n"; 
		$headers .= "X-Priority: 3\n"; // 1 Urgente, 3 Normal 
        $headers .= "Cc: Contato - Site <bruno.roberto16@hotmail.com\n";
            
		$conteudo = "<html><head><meta charset='utf-8'><title>Cadastro</title></head>";
		$conteudo .= "<body>";
		$conteudo .= $obs;
		$conteudo .= "<br><br>$nome<br />$email<br />Telefone: $celular<br><br>Conheci vocês $origem .";
		$conteudo .= "</body></html>";

#Função para aceitar os caracteres em HTML
$solicitacao=nl2br($solicitacao);

#Manda-se o e-mail
$envio = mail($to, $assunto, $conteudo, $headers);
?>
<script>
//Aqui redireciona para a pagina com a mensagem (ex..."Seu email foi enviado com sucesso. Obrigado")
document.location.href="fale-consoco-ok.html"; 
</script>
