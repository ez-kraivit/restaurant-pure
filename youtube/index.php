<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $key = "AIzaSyD15P4WnzdmCV0i_Cdy-Wuo66ApNXX2gIU";
    $base_url = "https://www.googleapis.com/youtube/v3/";
    $channelId = "UCAm8mYw3DS7N-9iT0kR9Uxg";
    $maxResult = 10;
    
    $API_URL = $base_url."search?order=date&part=คนเหงา&channelId=".$channelId."&maxResult=".$maxResult."&key=".$key;

    $videos = json_decode( file_get_contents($API_URL));
    print_r($videos);
?>
</body>
</html>
