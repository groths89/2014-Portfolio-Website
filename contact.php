<?php
$field_firstname = $_POST['cf_firstname'];
$field_lastname = $_POST['cf_lastname'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'groths06@gregory-rothstein.com';
$subject = 'Message from '.$field_lastname.', '.$field_firstname;

$body_message = 'From: Mr/Ms. '.$field_firstname.' '.$field_lastname."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to g.p.rothstein@gmail.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>