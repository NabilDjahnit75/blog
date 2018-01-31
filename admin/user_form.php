<?php require_once ('../tools/_db.php')?>

    <?php

        if (isset($_POST['submit'])) {


        $query = $db->prepare('INSERT INTO user(firstName, lastName, email, password, bio, is_admin) VALUES(?, ?, ?, ?, ?, ?)');
        $result=$query->execute(array(

            $_POST['FirstName'],
            $_POST['LastName'],
            $_POST['Email'],
            $_POST['Password'],
            $_POST['bio'],
            $_POST['Is_admin'] ));

    }


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/form_style.css">
    <?php require_once ('../partials/head_assets.php')?>
    <title>Document</title>
</head>
<body>
<form action="user_form.php" method="post" class="d-flex flex-column align-items-center">
    <label>Prénom : <input name="FirstName" class="mt-5" type="text" title="FirstName" placeholder="Prénom" value=""/></label>
    <label>Nom : <input name="LastName" type="text" title="LastName" placeholder="Nom" value=""/></label>
    <label>Email : <input name="Email" type="email" title="email" placeholder="email" value=""/></label>
    <label>Mot de passe : <input name="Password" type="password" title="password" placeholder="Mot de passe" value=""/></label>
    <textarea name="bio" id="bio" cols="40" rows="6" placeholder="Description"></textarea>
    <label>Compte :<select name="Is_admin">
        <option value="1">Admin</option>
        <option value="0">User</option>
    </select>
    </label>
    <input id="submit" name="submit" title="submit" type="submit" value="Enregister">
</form>
</body>
</html>