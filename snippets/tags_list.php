<?php

if (! function_exists('getAllTags')) {
	function getAllTags() {
		return Record::findAllFrom('Tag');
	}
}

?>

<ul class="tags-list">
	<?php foreach (getAllTags() as $tag): ?>
	<li><a href="/тестовый-полигон/pages-of-tag?name=<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a> (<?php echo $tag->count; ?>)</li>
	<?php endforeach; ?>
</ul>