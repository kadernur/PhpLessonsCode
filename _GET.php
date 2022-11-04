<<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type content"  content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="tr">
    <meta charset="utf-8">
    <title>PHP EĞİTİMLERİ</title>
    <style>
        header{
            background-color: aqua;
            padding: 2em;
            text-align: center;
        }
    </style>



</head>

<body>

<header>
    <h1>
        <?php

            $name=$_GET['name'] ;
             echo $name;

        ?>
    </h1>

<!--    kısa gösterimi-->
    <h1><?php echo "Hello, "  . $_GET['name']; ?></h1>

    <h1>

        <?=  "Hİ, "  . htmlspecialchars( $_GET['name']); ?>
    </h1>
</header>



</body>



</html>
