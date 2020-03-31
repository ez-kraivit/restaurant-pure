<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <button id="clicks">Click !</button> -->
    <script>
    $(function(){
        function Realtime(){
            console.log('Hello world');
        }
        setInterval(Realtime,10000);
    });
    </script>
</body>

</html>