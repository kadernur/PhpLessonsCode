<!doctype html>
<html lang="tr-TR">
<head>

    <meta charset="utf-8">
    <title>PHP EĞİTİMLERİ</title>




</head>

<body>

<h1>Task For The Day </h1>
<!--//ucwords ilk harflerini büyük yazmamıza olanak sağlar-->
<ul>
    <li>
        <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>

    <li>
        <strong>Person Responsible</strong> <?=$task['assigned_to'] ; ?>


<!--        -->
        Uzun hali
        <?php //if ($task['completed']){
//             echo 'Complete';
//        }
//        else{
//            echo 'Incomplete';
//        }
//        ?>




    </li>
    <li>
        <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ; ?>
    </li>


</ul>


</body>



</html>

