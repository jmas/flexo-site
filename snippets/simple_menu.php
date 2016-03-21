<?php
/**
* Полный URI страницы
* @var string
*/
$page = isset($page) ? $this->find($page): $this;
?>
<?php foreach ($page->children() as $item): ?>
	<li><?php echo $item->link(null, null, true); ?></li>
<?php endforeach; ?>