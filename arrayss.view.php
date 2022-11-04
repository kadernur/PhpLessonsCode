<!doctype html>
<html lang="tr-TR">
<head>

    <meta charset="utf-8">
    <title>PHP EĞİTİMLERİ</title>




</head>

<body>

<ul>
    <?php foreach ($person as $key =>  $feature):?>
     <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
     <?php endforeach; ?>
</ul>


</body>



</html>

