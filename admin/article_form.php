<?php require_once '../tools/_db.php'; ?>


<?php

if (isset($_POST['submit'])) {


    $query = $db->prepare('INSERT INTO article ( category_id,title,created_at,content,summary,is_published ) VALUES(?, ?, now(), ?,?, ? )');
    $result=$query->execute(array(

        $_POST['category_id'],
        $_POST['title'],
        $_POST['content'],
        $_POST['summary'],
        $_POST['is_published'],

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
<h4 style="text-align: center;margin-top: 5%"> Ajouter un article : </h4>

<form style="margin-top: -2%" action="article_form.php" method="post" class="d-flex flex-column align-items-center">


    <label> titre : <input name="title" class="mt-5" type="text" title="title" placeholder=" Nom de l'article" value=""/></label>

    <label> Contenu : <textarea name="content" id="" cols="40" rows="6" placeholder=" contenu de l'article"></textarea></label>

    <label> Resume : <input name="summary" class="mt-5" type="text" title="summary" placeholder="Resume de l'article" value=""/></label>




            <select name="category_id" id="">

              <option value="1"> cinema </option>
              <option value="2"> musique </option>
              <option value="3"> theatre </option>
              <option value="4"> jeux video </option>



            </select>



            <label> Publication :<select name="is_published">
            <option value="1">OUI</option>
            <option value="0">NON</option>
        </select>

    </label>



    <input id="submit" name="submit" title="submit" type="submit" value="Enregister">


</form>
</body>
</html>
