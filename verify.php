<?php
$access_token = 'B6O6gWebXmzLXXF92SgHhkBvCrKw0Aza+N0F0e27yp16/uJFl4EVzESKtD2oM20LvRoaaxGIWcXpLu3r8ZIvEUfjOtF4U0NYbl+rDixshsq2bjOzpfhgcECPEmdYyaOPwrv8rkWz47cquNeLXL79KAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
