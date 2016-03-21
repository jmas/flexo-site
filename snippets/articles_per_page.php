<?php
/**
* Полный URI страницы
* @var string
*/
$page = isset($page) ? $this->find($page):  $this;

/**
* Кол-во статей на странице
* @var string
*/
$per_page = isset($per_page) ? $per_page: 5;

use_helper('Pager');

$pager = new Pager(array(
    'items_per_page' => $per_page,
    'base_url' => $this->url() . '?page={page}',
    'total_items' => $page->childrenCount()
));

?>

<?php if (is_object($page)): ?>
<div class="articles">
<?php foreach($page->children(array('order' => 'page.position DESC ' . $pager->sql_limit)) as $article): ?>
<div class="item">
  <h2><?php echo $article->link(); ?></h2>
  <p class="date"><small><?php echo $article->date(); ?></small></p>
  <div class="content">
    <?php echo $article->content('short'); ?>
  </div>
</div>
<?php endforeach; ?>
</div>

<?php echo $pager; ?>
<?php endif; ?>