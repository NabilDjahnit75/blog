<?php require_once '../tools/_db.php'; ?>





<?php

if (isset($_POST['submit'])) {


    $query = $db->prepare('INSERT INTO category ( name, description ) VALUES(?, ? )');
    $result=$query->execute(array(

        $_POST['name'],
        $_POST['description'],
         ));

}


?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <?php require_once ('../partials/head_assets.php')?>
    <title>Doc</title>
</head>
<body>
<form action="category_form.php" method="post" class="d-flex flex-column align-items-center">

    <label> Nom de la Categorie <input name="name" class="mt-5" type="text" title="name" placeholder="category" value=""/></label>

    <textarea name="description" id="description" cols="40" rows="6" placeholder="Description"></textarea>


    <input id="submit" name="submit" title="submit" type="submit" value="Enregistrer">
</form>
</body>
</html>


