<?php
$to = "sasmitohrr@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: nscis.ngodingstudyclub@gmail.com" . "\r\n" .
"CC: sasmitohrr@gmail.com";

mail($to,$subject,$txt,$headers);
?>