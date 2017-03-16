<?php
require_once('src/QrCode.php');

use Endroid\QrCode\QrCode;

$qr = new QrCode();

function encode($input)
{
    $temp = '';
    $length = strlen($input);
    for($i = 0; $i < $length; $i++)
        $temp .= '%' . bin2hex($input[$i]);
    return $temp;
}

$urlValue=$_GET['id'];
if(empty($urlValue))
    $urlValue="Empty QR";
$encodedURL= encode($urlValue);
$qr
    ->setText($encodedURL)
    ->setSize(300)
    ->render();
?>
