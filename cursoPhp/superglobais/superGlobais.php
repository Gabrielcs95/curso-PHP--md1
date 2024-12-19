<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
        <?php 
        echo"super global GET";
        var_dump($_GET);
        echo"<h1> superblobal post</h1>";
        var_dump($_POST);
        var_dump($_REQUEST);
        var_dump($_COOKIE);
        var_dump($_ENV);
        var_dump($_FILES);
        var_dump($_SESSION);
        var_dump($GLOBALS);

        ?>
        </pre>
    </main>
</body>
</html>