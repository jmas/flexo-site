<?php
/**
* Полный URI страницы
* @var string
*/
$page = empty($page) ? $this: $this->find($page);
$prev_date = null;
?>
<?php if (is_object($page)): ?>
<ul class="articles-tile">
	<?php foreach ($page->children(array('order' => 'page.created_on DESC')) as $item): ?>
	<?php if ($prev_date != $item->date('%m-%Y')): ?>
	<h2><?php echo $item->date('%B %Y'); ?></h2>
	<?php $prev_date = $item->date('%m-%Y'); endif; ?>
	<li><?php echo $item->link(); ?></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>