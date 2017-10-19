<?php
session_start();
//anti injection
if (!function_exists("anti_injection")) {

    function anti_injection($arr) {
        $vetor = array();
        $vowels = array("<", ">", "(", ")", "--", "'", '"', "\\", "&", "#");
        foreach ($arr as $key => $vet) {
            $vetor[$key] = addslashes(str_replace($vowels, "", $vet));
        }
        return $vetor;
    }

}

$dadosenviado = anti_injection($_POST);

$nome	 = $dadosenviado['contactName']; // Pega o valor do campo Nome
$email	 = $dadosenviado['contactEmail']; // Pega o valor do campo Email
$email2	 = $dadosenviado['contactEmail2']; // Pega o valor do campo Email
$assunto	 = $dadosenviado['contactSubject']; // Pega o valor do campo Email
$mensagem = $dadosenviado['contactMessage']; // Pega os valores do campo Mensagem

if ($email == $email2){
date_default_timezone_set('America/Sao_Paulo');

// Variável que junta os valores acima e monta o corpo do email

$Vai 		= 
    "Alguém entrou em contato pelo site lteixeira. <br>" .
    "Aqui está mais detalhes:<br><br><b>Nome</b>: $nome <br><b>Email</b>: $email<br><br><b>Mensagem</b>: " .
    "<br>" .$assunto. " <br> " .
    " " .$mensagem. " <br><br> <br> <i>" .
        "<b>Atenciosamente,<br>Eu mesmo.</b> http://www.lteixeira.tk<br>  "; 


require_once("phpmailer/class.smtp.php");
require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'no-reply@banhosoft.com.br'); // <-- Insira aqui o seu GMail
define('GPWD', '9XT6QQndbqXT62'); // <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();		// Ativar SMTP
    $mail->SetLanguage("br");	// lingua
        $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        $mail->SMTPAuth = true;		// Autenticação ativada
        $mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
//        $mail->Host = 'smtp.mandrillapp.com';	// SMTP utilizado
        $mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
//        $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
        //$mail->Host = 'smtp.gmail.com';// SMTP utilizado
        $mail->Host = 'mail.banhosoft.com.br'; //$mail->Host = 'mail.banhosoft.com.br'; SMTP bs 
//        $mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
        $mail->Username = GUSER;
        $mail->Password = GPWD;
    $mail->SetFrom($de, $de_nome);
    $mail->Subject = $assunto;
    $mail->AddAddress($para);
    $mail->IsHTML(true);     // ativar html
    $mail->CharSet="utf-8";     // utf-8
    $mail->Body = $corpo;
    $mail->WordWrap = 70;     // ativar html
    if(!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}

// Insira abaixo o email que irá receber a mensagem, 
// o email que irá enviar (o mesmo da variável GUSER), 
// o nome do email que envia a mensagem, 
// o Assunto da mensagem 
// e por último a variável com o corpo do email.


if (smtpmailer('leoh.web@gmail.com','no-reply@banhosoft.com.br', 'lteixeira.tk', $assunto.' - Contato', $Vai)) {
    $_SESSION['status'] = 'emailenviado';
    header('location:../../#contato');
}else{
    $_SESSION['status'] = 'emailerro';
    header('location:../../#contato');
}
if (!empty($error)) echo $error;

}else{
    $_SESSION['status'] = 'emailconfere';
    header('location:../../#contato');
}


    /*                
    $to          = 'contato@banhosoft.com.br';
    $subject   = "BanhoSoft - Contato: $name";
    $message_body =  
    "<div style='background: #DDD; padding: 20px; border-radius: 5px; '>" .        
    "Olá, <strong><h2>" .$name. "</h2></strong><br>" .
    "Sua mensagem foi enviada com sucesso para nossa equipe do BanhoSoft, " .
    "com o e-mail <b>" .$email_address. "</b>.<br>" .
    "Aqui está mais detalhes:<br><br>Nome: $name <br>Email: $email_address <br>Telefone: $phone<br><br>Mensagem: " .
    "<b>" .$message. "</b><br><br> <br><br><br> <br><i>" .
    "obs: esse e-mail é automático, não responda.<b><br>" .
    "caso ainda tenha alguma dúvida, mande outro formulário de contato pelo site.<b>" .
    "<br><br><br><img src='https://fluffy.16mb.com/arquivos/img/logo-banhosoft.png' title='Banhosoft' width='120px' height='55px;'> <br>" .        
    "<b>Administração, BanhoSoft" . "</b></i><br>" .
    "https://www.banhosoft.com.br/" . " <br></div>" ; 
    
    
    $message = wordwrap($message, 70);
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    $headers .= 'From: Banhosoft - Admin <contato@banhosoft.com.br>'. "\r\n";  //Vai ser //mostrado que o email partiu deste email e seguido do nome 
    $headers .= 'X-Sender: <admin@fluffy.16mb.com>'. "\r\n";  //email do servidor //que enviou 
    $headers .= 'X-Mailer: PHP v'.phpversion(). "\r\n"; 
    $headers .= 'X-IP: '.$_SERVER['REMOTE_ADDR']. "\r\n"; 
    $headers .= "Reply-To: $email_reply"."\r\n"; 
    $headers .= 'Bcc: leoh.web@gmail.com' . "\r\n"; 
    $headers .= "Cc: $email_address "."\r\n"; 
    $headers .= 'Return-Path: <leoh.web@gmail.com>'. "\r\n";  //caso a msg //seja respondida vai para este email.  

try {
    mail($to, $subject, $message_body, $headers);
    $_SESSION['status'] = 'emailenviado';
} catch (Exception $exc) {
    $_SESSION['status'] = 'emailerro';
} 
   
header('location:/home#contact');*/
    
 
 

