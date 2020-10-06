<?php

require_once('config.php');

function dd($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	exit;
}

function uri_segment($num){
	$exp = explode('/',trim($_SERVER['REQUEST_URI'],'/'));
	if(array_key_exists(($num-1), $exp) === false) return false;
	else return $exp[($num-1)];
}

function uri_string($string){
	// only take alphanumeric
	return preg_replace("/[^a-zA-Z0-9]/", "-", $string);
}

function theme_dir($path){
	global $config;
	return '/themes/'.$config->theme.'/'.trim($path,'');
}


function posts(){
	global $config;
	
	require_once('parsedown.php');
	$parsedown = new Parsedown;

	$posts = [];
	$counter = 1;
	$is_page = $is_single = false;
	$post_key = false;
	if(uri_segment(1) == 'read'){
		$post_key = 'post/'.uri_segment(3).'.json';
		$is_single = true;
	}

	$page = 1;
	if($is_single == false AND uri_segment(1) == 'page'){
		$page = uri_segment(2);
		$is_page = true;
	}

	// dd(is_page());
	$jsons = glob('post/*.json');

	// susun jsons according to published date
	$files = [];
	foreach($jsons as $i=>$file){
		$filename = str_replace('post/', '/', $file);
		// print_r($filename);
		$post = json_decode(file_get_contents('./post/'.$filename), true);
		$post_key = $post['published_at'].'-'.$i;
		$files[$post_key] = $file;
	}

	krsort($files);
	$files = array_values($files);

	// dd($jsons);
	// dd($page);
	foreach($files as $i=>$file){
		// has json = published post
		// if(strpos($file, '.json') !== false AND $counter <= $config->total_post_shown_per_page){
		$current_page = ceil($counter/$config->total_post_shown_per_page);
		
		// dd($page);
		if(
			(is_single() AND $file == $post_key) 
			OR ( (is_home() OR is_page()) AND $current_page == $page) 
			OR is_search()
		){
			$filename = str_replace('post/', '/', $file);
			// print_r($filename);
			$post = json_decode(file_get_contents('./post/'.$filename), true);
			$html = $parsedown->parse(file_get_contents('./post/'.str_replace('.json', '.md', $filename)));
			$html = substr( $html, strpos($html, "\n")+1 );
			$post_key = $post['published_at'].'-'.$i;
			$post['content'] = $html;
			$post['count'] = $counter;
			$post['permalink'] = $config->base_url.'/read/'.str_replace('.json', '', $file);
			$post['published_at'] = date($config->date_format, strtotime($post['published_at']));
			// dd($post);

			if(is_search()){

				$phrase = urldecode($_GET['search']);
				$search = false;

				if(
					strpos($post['title'], $phrase) !== false
					OR strpos($post['content'], $phrase) !== false
					OR strpos($post['author'], $phrase) !== false
				){
					$search = true;
				}
			}else{
				$search = true;
			}

			if($search == true){
				$posts[$post_key] = (object)$post;
			}
		}

		
		$counter++;
		// }
	}

	krsort($posts);
	// dd($posts);
	// dd($posts);
	return $posts;
}

function is_search(){
	return (array_key_exists('search', $_GET) !== FALSE);
}

function is_home(){
	return (uri_segment(1) == false);
}

function is_single(){
	return (uri_segment(1) == 'read');
}

function is_page(){
	return (uri_segment(1) == 'page');
}

function pagination(){
	if(is_page() OR is_home()){
		global $config;

		$current_page = uri_segment(2);
		if(!$current_page) $current_page = 1;

		$total_post = count(glob('post/*.json'));
		$perpage = $config->total_post_shown_per_page;

		$total_page = ceil($total_post / $perpage);

		$pages = [];
		for($i=1; $i<=$total_page; $i++){
			$active = '';
			if($i == $current_page) $active = 'class="active"';
			$pages[] = '<li><a href="/page/'.$i.'" '.$active.'>'.$i.'</a></li>';
		}

		echo '<ul class="pagination">'.implode('', $pages).'</ul>';
	}
}

function dummy_posts(){
	global $config;
	$posts = [];

	$ipsum = [
		'Pastry wafer chocolate gingerbread cake fruitcake. I love fruitcake jelly beans cupcake chocolate cake. Muffin sweet roll icing wafer cupcake dragée. Donut sesame snaps tootsie roll. Liquorice gingerbread sugar plum cupcake powder jujubes. Powder halvah sugar plum. I love bear claw sweet roll. Biscuit jelly I love bonbon. Chupa chups cookie chocolate gingerbread bonbon croissant. Chocolate cake I love chocolate cake pastry.',
		'Croissant tootsie roll I love cake powder. Dragée macaroon oat cake. I love halvah carrot cake chocolate pie halvah gummi bears. Candy tootsie roll caramels. Jelly icing chocolate cake tart cookie chocolate I love topping. Jujubes powder cupcake muffin jujubes brownie. Chocolate cake cotton candy I love biscuit dessert. Chocolate chocolate cake halvah jelly beans.',
		'Oat cake I love ice cream danish. Sugar plum powder candy jelly-o I love carrot cake. Cookie macaroon chocolate cake I love bear claw candy jelly-o. Toffee muffin tiramisu sugar plum candy canes cake icing. Pudding apple pie jelly-o liquorice bear claw. I love gingerbread caramels sesame snaps gingerbread.',
		'Tiramisu I love icing I love gummies. Fruitcake lollipop croissant marzipan. Gummies brownie halvah cookie muffin tart. Cotton candy chocolate bar croissant cookie marshmallow cotton candy. Gingerbread pie cookie croissant gummies sweet roll chupa chups. Muffin soufflé jelly beans I love cheesecake jelly-o macaroon halvah.',
		'Fruitcake bonbon jelly beans cheesecake dragée lemon drops ice cream ice cream cake. Donut pastry donut I love pudding. Wafer macaroon icing wafer marzipan cheesecake marzipan. Brownie chocolate cake tart I love jelly I love. Bear claw macaroon ice cream marshmallow tart powder marzipan. I love tiramisu brownie liquorice I love cotton candy sesame snaps.'
	];

	for($i=0; $i < 30; $i++){

		// dev the para
		$total_para = rand(1,9);
		$para = [];
		for($ii=0; $ii < $total_para; $ii++){
			$p = $ipsum[array_rand($ipsum)];
			$length = rand(20, strlen($p));

			$para[] = substr($p, 0, $length);
		}

		// dev the title
		$title = ucwords(substr($ipsum[array_rand($ipsum)], 5, 30));

		$posts[] = (object)[
			'title'=>$title,
			'permalink'=>$config->base_url.'/read/'.uri_string($title),
			'content'=>'<p>'.implode('</p><p>', $para).'</p>',
			'author'=>'Izwan Wahab',
			'published_at'=>date($config->date_format, strtotime('2018-12-2 08:00:00'))
		];
	}

	return $posts;

}


?>