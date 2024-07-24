<?php require_once('header.php');?>
	<?php foreach(posts() as $post): ?>
	<div class="post">
		<h1><a href="<?= $post->permalink; ?>"><?= $post->title;?></a></h1>

		<div class="body">
			<?= $post->content ?>
		</div>

		<div class="ender">
			published at <?= $post->published_at; ?> by <a href="/search=<?= urlencode($post->author)?>"><?= $post->author; ?></a>
		</div>
	</div>
	<?php endforeach;?>

	<?php pagination();?>
<?php require_once('footer.php');?>