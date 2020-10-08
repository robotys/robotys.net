<?php require_once('header.php');?>
	<?php foreach(posts() as $post): ?>
	<div class="post">
		<h1><a href="<?= $post->permalink; ?>"><?= $post->title;?></a></h1>

		<div class="body">
			<?= $post->content ?>
		</div>

		<div class="ender">
			published at <?= $post->published_at; ?> by <a href="/search=<?= urlencode($post->author)?>"><?= $post->author; ?></a>

			<?php if(array_key_exists('tags', $post) AND count($post->tags) > 0): ?>

				tagged under: 
				<?php 
					if(count($post->tags) == 1) echo '<a href="/?search='.$post->tags[0].'">#'.$post->tags[0].'</a>';
					if(count($post->tags) == 2) echo '<a href="/?search='.$post->tags[0].'">#'.$post->tags[0].'</a> and <a href="/?search='.$post->tags[1].'">#'.$post->tags[1].'</a>';
					if(count($post->tags) > 2){
						$last = array_pop($post->tags);
						$tags = [];
						foreach($post->tags as $tag){
							$tags[] = '<a href="/?search='.$tag.'">#'.$tag.'</a>';
						}
						$last = '<a href="/?search='.$last.'">#'.$last.'</a>';
						echo implode(', ',$tags).' and '.$last;
					} 
				?>



			<?php endif;?>
		</div>
	</div>
	<?php endforeach;?>

	<?php pagination();?>
<?php require_once('footer.php');?>