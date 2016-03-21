<?php

$url = 'http://groups.google.com/group/flexo-manage-content/feed/rss_v2_0_topics.xml';
$file = '.googlegroups-rss';

if (filemtime($file)+2*60*60 < time()) {

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xmlContent = curl_exec($ch);
curl_close($ch);

if ($xmlContent) {
	ob_start();
	echo '<ul class="gg-list">';
	$xmlObj = simplexml_load_string($xmlContent);
	foreach ($xmlObj->channel->item as $item) {
		echo '<li><a href="'.$item->link.'">'.$item->title.'</a></li>';
	}
	echo '</ul>';
	$content = ob_get_contents();
	ob_end_flush();
	file_put_contents($file, $content);
}


} else {
	$content = file_get_contents($file);
	echo $content;
}

?>