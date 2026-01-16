<?php

$json = file_get_contents('php://input');
$object = json_decode($json);

$steps = [
	// [
	// 	'name' => 'Debug I',
	// 	'command' => 'whoami',
	// ],
	// [
	// 	'name' => 'debug ii',
	// 	'command' => 'ls -all .',
	// ],
	[
		'name' => 'Pull latest code',
		'command' => 'git pull --no-edit --no-rebase origin master 2>&1',
	],
	// [
	// 	'name' => 'Migrate DB',
	// 	'command' => 'php ../artisan migrate'
	// ],
	// [
	// 	'name' => 'Build for production',
	// 	'command' => 'npm run build',
	// ],
	// [
	// 	'name' => 'Restart tiktok server',
	// 	'command' => 'node ../node/server.js'
	// ],
];

//

foreach($steps as $step)
{
	$output[] = '----/s/';
	$output[] = '# '.$step['name'];
	$output[] = '$ '.$step['command'];
	// $output[] = '----/output/';
	exec($step['command'], $output, $exit);
	$output[] = '----/'.$exit.'/';
	// $output[] = '#['.$exit.']######';
	$output[] = '';

	// if($exit !== 0)
	// {
	// 	http_response_code(500);
		// break;
	// }
}

echo '<pre>';
foreach($output as $line)
{
	echo $line."\r\n";
}
echo '</pre>';
// dd($output);


function dd($arr)
{
	echo '<pre>';
	if(is_bool($arr)) var_dump($arr);
	else print_r($arr);
	echo '</pre>';
}