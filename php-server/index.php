<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>

</body>

</html>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:6020/api/member",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "User-Agent: PostmanRuntime/7.23.0",
    "Accept: */*",
    "Cache-Control: no-cache",
    "Postman-Token: 7899e26a-9388-4fad-bfd5-a4240cfa2315",
    "Host: localhost:6020",
    "Accept-Encoding: gzip, deflate, br",
    "Connection: keep-alive"
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$test = json_decode($response, true);
print_r($test);
