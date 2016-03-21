<?php

class FrontPageExt extends FrontPage
{
	public static function findChildrens($id, $args=null, $value=array(), $include_hidden=false)
	{
		$connection = Record::getConnection();

		// Collect attributes...
	        $where   = isset($args['where']) ? $args['where']: '';
	        $order   = isset($args['order']) ? $args['order']: 'position, id';
	        $limit   = isset($args['limit']) ? $args['limit']: 0;
        	$offset  = 0;
        
	        // Prepare query parts
	        $where_string = trim($where) == '' ? '' : "AND ".$where;
	        $limit_string = $limit > 0 ? "LIMIT $offset, $limit" : '';

		$page_class = __CLASS__;

		$sql = 'SELECT page.*, author.name AS author, author.id AS author_id, updator.name AS updator, updator.id AS updator_id '
	             . 'FROM '.TABLE_PREFIX.'page AS page '
	             . 'LEFT JOIN '.TABLE_PREFIX.'user AS author ON author.id = page.created_by_id '
	             . 'LEFT JOIN '.TABLE_PREFIX.'user AS updator ON updator.id = page.updated_by_id '
	             . 'WHERE parent_id IN(' . join(',', $id) . ') AND published_on <= NOW() AND (status_id='.self::STATUS_REVIEWED.' OR status_id='.self::STATUS_PUBLISHED.($include_hidden ? ' OR status_id='.self::STATUS_HIDDEN: '').') '
	             . "$where_string ORDER BY $order $limit_string";

		$stmt = $connection->prepare( $sql );
		$stmt->execute($value);

		if ($stmt->rowCount() > 0)
		{
			$result = array();
			while ($page = $stmt->fetchObject()) {
				if ($page->parent_id)
					$parent = self::findById($page->parent_id);
				else
					$parent = null;

				// hook to be able to redefine the page class with behavior
				if ( !empty($parent->behavior_id) )
				{
					// will return Page by default (if not found!)
					$page_class = Behavior::loadPageHack($parent->behavior_id);
				}

				// create the object page
				$page = new $page_class($page, $parent);

				Observer::notify('frontpage_children_found', array($page));

				$result[] = $page;
			}

			return $result;
		}
		else
			return null;
	}
}

$pages = FrontPageExt::findChildrens(array(39, 22), array('order' => 'created_on'));

echo '<p>Разделы: Тестовый полигон, Расширения: </p><ul>';

foreach ($pages as $page) {
	echo '<li>' . $page->parent->title() . ': '. $page->title() . '</li>';
}

echo '</ul>'

?>