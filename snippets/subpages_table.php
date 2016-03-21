<?php
/**
* Полный URI страницы
* @var string
*/
$page = isset($page) ? $this->find($page): $this;
$prev_date = null;
?>
<?php if (is_object($page)): $items = $page->children(); ?>
<table class="subpages-table">
	<?php foreach ($items as $i => $item): ?>
	<?php if ($i == 0 ) echo('<tr>'); ?>
	<?php if ($i != 0 && ($i % 4) == 0 ) echo('</tr><tr>'); ?>
	<td><?php echo $item->link(); ?></td>
	<?php if (($i+1) == count($items) ) echo('</tr>'); ?>
	<?php endforeach; ?>
</table>
<?php endif; ?>