<?php
$to = 'davift@gmail.com';

$json = file_get_contents('php://input');
$data = json_decode($json);

$name = htmlentities(strip_tags($data->nacontacme), ENT_QUOTES);
$email = htmlentities(strip_tags($data->emcontactail), ENT_QUOTES);
$type = htmlentities(strip_tags($data->tycloudpe), ENT_QUOTES);
$message = htmlentities(strip_tags($data->temessagext), ENT_QUOTES);

if ($name == '' || $email == '' || $type == '' || $message == '') {
  exit;
}

mail($to, "[tor1] DFT.one", "FROM: $name <$email>\n\nTYPE: $type\n\nMESSAGE: $message");
?>
