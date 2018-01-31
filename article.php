<?php require_once 'tools/_db.php'; ?>

<!DOCTYPE html>
<html>
 <head>

     <?php
     $query = $db->query('SELECT * FROM article WHERE id = ' . $_GET['id']);
     $data2=$query->fetch();
     ?>

	<title><?php echo $data2['title']; ?> - Mon premier blog !</title>

   <?php require 'partials/head_assets.php'; ?>

 </head>
 <body class="article-body">
	<div class="container-fluid">

		<?php require 'partials/header.php'; ?>

		<div class="row my-3 article-content">

			<?php require 'partials/nav.php'; ?>


			<main class="col-9">

            <!-- contenu de l'article -->




                    <article class="mb-4">
                        <h2><?php echo $data2['title'];?></h2>
                        <span class="article-date"> crée le <?php echo $data2 ['created_at']; ?> </span>
                        <div class="article-content"> <?php echo $data2['content'];?> </div>
                    </article>




			</main>

		</div>

		<?php require 'partials/footer.php'; ?>

	</div>
 </body>
</html>
