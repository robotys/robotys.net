Welcome To Storm
===


![Photo by Simon Rae on Unsplash](/media/storm.jpg)

Storm is the next iteration of this lingering idea to have a developer friendly blog engine with no database and only the needed and essential working parts. Last iteration was Rain.

The main reason Rain was developed is to create a blog engine that is really integrated to my current workflow in developing Web Application. Said workflow is: `Write in Text Editor -> Git Commit -> Git Push.`

And the rest is taken up by `Continuous Integration` setup.

However, Rain proven to be difficult to use with Nginx, which I need to use in new setup. As a result, Storm was written from scratch to enable me to enjoy Rain but in Nginx environment with long overdue features.

Well, look at how simple it is. This is the whole code for index page:

```
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
```

List
---

Requirements:
1. PHP 5.6
2. NGINX
3. Git
4.[Good text editor](http://www.sublimetext.com) (Pick your poison)

What Storm did not have:
1. User login online.
2. Category. but we do have tags
3. Dashboard. This is not `Wordpress`</a>
4. WYSIWYG editor. Again, this is not `Wordpress`!
5. Comments. Use [Disqus](http://disqus.com)</a> instead.

Future Roadmap:
1. CDN compatible
2. Simple Analytics
3. Subscription / Newsletter with AWS integration

Which brings this <strike>rant</strike> post to its main caveat: if you are not web developer, and not familiar with git workflow, most likely Storm is not for you.

For 1% of you that fall in that little spot: hey buddies!


![Izwan Robotys Cute Face](/media/robotys.jpg)<br/>`Izwan Robotys`<br/><small>Kuala Lumpur</small>

*ps: If you have any suggestion to further simplify Rain, please do so in github issues. Better yet: fork and pull request. <br> pps: Rain was released under [MIT opensource](https://en.wikipedia.org/wiki/MIT_License) license. Have no fear of using it in any way whatsoever.*



