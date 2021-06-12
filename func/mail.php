<?php
/*
	Mailing Service
*//*
if(!isset($_POST['relf-sb'])){
	header('Location: ../index.php?gr=s&form=1');
}*/

function mailsender($to, $subject, $message){


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8\r\n";

	$headers .= "From: ". $sett_yourpagename . " <" . $to .">\r\n";
	//$headers .= 'Cc: test@mymail.de' . "\r\n";  --> Remove // to use cc

	if(mail($to,$subject,$message,$headers)){
		if ($sett_redirectpage != '') {
			relf_redirect();
		} else {
			header('location: ../index.php?gr=s');
		}
	} else {
		header('location: ../index.php?gr=s&email=failed');
	}
}
?>
