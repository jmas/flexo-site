<?php
/**
* Полный URI страницы
* @var string
*/
$page = isset($page) ? $this->find($page): $this;

/**
* Ширина превью
* @var string
*/
$thumb_width = isset($thumb_width) ? $thumb_width: 100; 

/**
* Высота превью
* @var string
*/
$thumb_height = isset($thumb_height) ? $thumb_height: 100; 

?>
<ul id="gallery" class="tile-list">
	<?php foreach($page->children() as $child): ?>
	<?php $image = $child->images->findOne(); ?>
	<li>
		<a href="<?php echo $child->url(); ?>">
			<img src="<?php echo ($image ? $image->url($thumb_width, $thumb_height): ''); ?>" width="<?php echo $thumb_width; ?>" height="<?php echo $thumb_height; ?>" alt="<?php echo $child->title(); ?>" />
			<span><?php echo $child->title(); ?></span>
		</a>
	</li>
	<?php endforeach; ?>
</ul>