<?php
$ip = getenv("REMOTE_ADDR");
$host = implode('.', array_reverse(explode('.', $ip))) . '.dnsel.torproject.org';
if (!empty(dns_get_record($host))){
  $name = 'istor.png';
} else {
  $name = 'nottor.png';
}

$fp = fopen($name, 'rb');

header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

fpassthru($fp);
?>
