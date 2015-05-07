<?
$nome=$_POST['nome'];
$email=$_POST['email'];
$texto=$_POST['texto'];

$Destinatario="dfcquaresma@gmail.com";

$Titulo="$titulo";

$mensagem1="
Uma mensagem vinda do site !
Algum vistante mandou essa mensagem pelo site.
Nome: $nome
Email: $email
Mensagem: $texto";

mail("$Destinatario","$Titulo", "$mensagem1","From:$email");
?>

<html>
<body>
<h2>Enviado com sucesso!</h2>
</body>
</html>