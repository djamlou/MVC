<?php
$link = new PDO
    (
        "mysql:host=localhost;dbname=blog"
        ,
        'blog'
        ,
        'tactac'
    );
$result = $link->query('SELECT id, title FROM post');
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        MyBlog : List of Posts
    </title>
</head>
<body>
<h1>
    List of Posts
</h1>
<ul>
    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC))
    :
    ?>
    <li>
        <a href="./detail.php?id=<?= $row['id'] ?>">
            <?= $row['title'] ?>
        </a>
    </li>
        <?php
    endwhile
    ?>
</ul>
</body>
</html>
