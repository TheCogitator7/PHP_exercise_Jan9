<!-- URL 파라미터의 활용 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
    </ol>
    <h2>
    <?php
    echo $_GET['id'];
    ?>
    </h2>
    <?php
    //data/id 값에 해당하는 파일의 내용
    echo file_get_contents("data/".$_GET['id']);
    ?>
</body>
</html>