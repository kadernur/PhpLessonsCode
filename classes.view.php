<!doctype html>
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

<ul>

    <?php foreach ($tasks as $task):?>
    <li><?= $task ->description; ?></li>

    <?php endforeach; ?>










    
</ul>


</body>



</html>
