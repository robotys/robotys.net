<?php 
	require_once('header.php');
?>
	
	<?php 
	if(count(posts()) > 0):
		foreach(posts() as $post): 
	?>
		<div class="post">
			<h1><a href="<?= $post->permalink; ?>"><?= $post->title;?></a></h1>

			<div class="body">
				<?= $post->brief ?>
			</div>

			<div class="ender">
				published at <?= $post->published_at; ?> by <a href="/search=<?= urlencode($post->author)?>"><?= $post->author; ?></a>
			</div>
		</div>
		<?php endforeach;?>
		<?php pagination();?>

	<?php else: ?>
	<div class="post">
		<h1>No Result</h1>
		<div class="body">
			<p>No Result found for search term '<?php echo $_GET['search']; ?>'</p>
		</div>
	</div>
	<?php endif;?>

<?php require_once('footer.php');?>