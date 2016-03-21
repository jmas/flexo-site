<?php

/**
* Ваш логин
* @var string
*/
$screen_name = isset($screen_name) ? $screen_name: null;

/**
* Кол-во сообщений
* @var string
*/
$num = isset($num) ? (int)$num: 3;

$tweets = array();

if ($screen_name)
{
	$content = file_get_contents('https://api.twitter.com/1/statuses/user_timeline.json?include_entities=false&include_rts=false&screen_name='. $screen_name .'&count='. $num .'&contributor_details=false');
	$tweets = json_decode($content);
}
/*
?>
<ul>
	<?php foreach ($tweets as $tweet): ?>
	<?php $text =  preg_replace('/(http\:\/\/[^ ]?*)/', '<a href="\1">\1</a>', $tweet->text); ?>
	<li><a href="http://twitter.com/flexo_cms/status/<?php echo $tweet->id_str; ?>">@<?php echo $tweet->user->screen_name; ?></a>: <?php echo $text; ?></li>
	<?php endforeach; ?>
</ul><?php */ ?>