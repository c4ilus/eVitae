<?php
    include('../pdo/get_data.php');
    require "class.phpmailer.php";

    foreach($_POST as $k=>$v){
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
    }

    $err = array();

    if(!checkLen('nom'))
	$err[]='Veuillez saisir votre nom !';

    if(!checkLen('prenom'))
	$err[]='Veuillez saisir votre prenom!';

    if(!checkLen('email'))
	$err[]='Veuillez saisir votre adresse mail !';

    else if(!checkEmail($_POST['email']))
	$err[]='Adresse email invalide !';

    if(!checkLen('message'))
	$err[]='Veuillez saisir votre messsage !';

    if(count($err)){
	if($_POST['ajax']){
            echo '-1';
	}

	else if($_SERVER['HTTP_REFERER']){
            $_SESSION['errStr'] = implode('<br />',$err);
            $_SESSION['post']=$_POST;
            header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	exit;
    }

    $message =
    '<b>De</b>: '.$_POST['prenom'].' '.$_POST['nom'].'<br />
     <b>Soci&eacute;t&eacute;</b>: '.$_POST['societe'].'<br/>
     <b>T&eacute;l&eacute;phone</b>: '.$_POST['telephone'].'<br/>
    <b>Email</b>: '.$_POST['email'].'<br /><br />
    <b>Message</b>:<br /><br />
    '.nl2br($_POST['message']).'
    ';

    $mail = new PHPMailer();
    $mail->IsMail();

    $mail->AddReplyTo($_POST['email'], $_POST['nom']);
    $mail->AddAddress($email);
    $mail->SetFrom($_POST['email'], $_POST['nom']);
    $mail->Subject = "Formulaire romain-moro.fr";
    $mail->MsgHTML($message);
    $mail->Send();


    if($mail->Send()){
        session_start();
        $_SESSION['message'] = "ok";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    function checkLen($str,$len=2){
        return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
    }

    function checkEmail($str){
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
    }
?>
