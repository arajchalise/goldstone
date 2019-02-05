<?php
if (($_POST['f_name'] == "") ||
($_POST['l_name'] == "") ||
    ($_POST['email'] == "") ||
    ($_POST['msg'] == "")) {
     header("Location: ../Edu/contact.php");
     exit;
}

$msg = "www.goldstone.edu.np\n";

$msg .= "Sender's E-Mail:\t".$_POST['email']."\n";
$msg .= "Message:\t".$_POST['msg']."\n";

$to = "contact@goldstone.edu.np";

$subject = "Web Site Feedback";

$mailheaders = "From: My Web Site <goldstone.edu.np>\n";


$mailheaders .= "Reply-To: ".$_POST['email']."\n";

echo 

$send = mail($to, $subject, $msg, $mailheaders);

if(!$send){
	echo "Error!!!!";
	exit;
}
else{
	echo "Your Contact has been sent";
	exit;
}

?>
