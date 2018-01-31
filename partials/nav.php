
<nav class="col-3 py-2 categories-nav">
	<b>Catégories :</b>
	<ul>
		<li><a href="article_list.php">Tous les articles</a></li>
		<!-- liste des catégories -->
<?php
  $query = $db->query('SELECT * FROM category ');

    while($data = $query->fetch()):
 ?>
<li>
    <a href=""><?php echo $data['name'];?></a>
</li>
<?php endwhile; ?>
	</ul>
</nav>
