<?php
$con = mysqli_connect('localhost', 'root', '', 'gallery');

if (!$con)
{
    echo "Sorry <br>";
    echo mysqli_connect_error();
    exit();
}

$result = mysqli_query($con, "SELECT * FROM `images`");

$r1 = mysqli_fetch_assoc($result);




?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div id="main">
    <h2>Галерея</h2>
    <div class="gallery">
        <?php

        while ($row = mysqli_fetch_assoc($result)): ?>
        <a href='show_image.php?idx=<?= $row["idx"] ?>'><img src='gallery_img/small/<?= $row["filename"] ?>'/>
            </a><?= $row["likes"] ?>

        <? endwhile; ?>

    </div>
</div>

</body>
</html>
