<?php
$title = 'Ajout d\'un article'
?>
<?php ob_start() ?>
<h1>
    Ajout d'un post
</h1>
<form action="/flatPHP/index.php/add" method="post">
    <input type="text" name="title" placeholder="Entrez un titre"/><br>
    <textarea type="text" name="content" placeholder="Contenu"></textarea><br>
    <input type="submit" value="Ajouter"/>
</form>
<a href="/flatPHP/index.php">Retour</a>
<?php $content = ob_get_clean() ?>
<?php include 'templates/view/layout.php' ?>


