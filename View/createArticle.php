<?php $title = "Création d'un article"; ?>
<head>
    <script src="./Public/js/tinymce/tinymce.min.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=23bq6vwnrc2kbayhp4sqbemkz7wc9g8q5eml59zwytdo50hb"></script>
    <script src="https://cdn.tiny.cloud/1/23bq6vwnrc2kbayhp4sqbemkz7wc9g8q5eml59zwytdo50hb/tinymce/5/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({ selector: '#createtextarea' });
    </script>
</head>

<?php ob_start(); ?>

<h2 id="create-title">Création d'un article</h2>
<div id="divcreate">
    <form action="index.php?action=createArticle" method="post">
        <label for="title">Titre : </label>
        <input type="text" name="title" id="title">
        <textarea name="createtextarea" id="createtextarea"></textarea>
        <input type="submit" value="Publier">
    </form>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>