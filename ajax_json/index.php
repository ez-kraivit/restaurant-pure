<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
    <div id="t1"></div>
</body>
</html>
<script>
    jQuery(function(){
        function realtime(){
        $.getJSON("data.json",function(data){
            console.log(data);
            console.log(data.name);
            jQuery("#t1").text(data.name);
        });
        }
        setInterval(realtime,1000);


    });
</script>