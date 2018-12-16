<?php

$config = [];

$config['name'] = 'Robotys.net';
$config['logo'] = 'media/avatar.jpg';
$config['description'] = 'Lead Dev at myparcelasia.com and consultant at notabisnes.net';
$config['social_description'] = 'Personal blog touches on tech, web dev, content, marketing and business';
$config['title'] = $config['name'].' - '.$config['description'];
$config['theme'] = 'robotys';
$config['total_post_shown_per_page'] = 5;
$config['google_analytics_id'] = false;
$config['fb_pixel_id'] = false;
$config['base_url'] = 'http://'.$_SERVER['HTTP_HOST'];
$config['date_format'] = 'd/m/Y';

$config = (object)$config;
?>