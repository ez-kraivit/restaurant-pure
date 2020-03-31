<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <div class="col-sm text-center">
        <?php
        if (isset($_GET['id'])) {
        ?>
            <object width="550" height="600">
                <param name="movie">
                <embed src="./Unit01/<?php echo $_GET['id'] ?>.swf" width="550" height="400">
                </embed>
            </object>
        <?php
        }
        ?>
        <br>
        <?php $i=1; $i+=1; ?>
        <nav aria-label="Page navigation example nav-auto">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">ย้อนกลับ</a></li>
                <li class="page-item"><a class="page-link" href="video.php?id=Unit01_<?php echo $i ?>">ข้างหน้า</a></li>
            </ul>
        </nav>

    </div>

</body>

</html>