<?php

$tagName = empty($_GET['name']) ? null: htmlspecialchars($_GET['name']);

if (! function_exists('getPagesOfTag')) {
	function getPagesOfTag($name) {
		$con = Record::$__CONN__;
		$stmt = $con->prepare('SELECT page.* FROM (' . TABLE_PREFIX . 'page AS page LEFT JOIN ' . TABLE_PREFIX . 'page_tag AS page_tag ON page.id=page_tag.page_id LEFT JOIN ' . TABLE_PREFIX . 'tag AS tag ON page_tag.tag_id=tag.id) WHERE tag.name LIKE :name');
		$stmt->execute(array(':name' => '%' . $name . '%'));
		$records = array();

		while ($obj = $stmt->fetchObject('Page')) {
			$records[] = $obj;
		}

		return $records;
	}
}

?>

<ul class="tag-pages-list">
	<?php foreach (getPagesOfTag($tagName) as $page): ?>
	<li><a href="<?php echo BASE_URL . $page->getUri(); ?>"><?php echo $page->title; ?></li>
	<?php endforeach; ?>
</ul>