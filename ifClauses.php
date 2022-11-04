<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");

if ($t < "10") {
    echo "Günaydın";
} elseif ($t < "15") {
    echo "İyi günler :))";
} else {
    echo "İyi Uykular!!";
}
?>

</body>
</html>
