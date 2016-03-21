<?php
/**
 * Полный URI к странице
 * @var array
 */
$page = isset($page) ? $this->find($page): $this;

if (!function_exists('snippet_pages_tree'))
{
	function snippet_pages_tree( $page )
	{
		$out = array();
		
		foreach ($page->children() as $child)
		{
			$html = $child->link(null, null, true);
			
			if ($child->childrenCount() > 0)
				$html .= snippet_pages_tree($child);
	
			$out[] = $html;
		}
	
		return '<ul><li>'. join($out, '</li><li>') .'</li></ul>';
	}
}

echo snippet_pages_tree($page);

?>