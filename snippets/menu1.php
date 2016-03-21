<?php
/**
 * Полный URI к странице
 * @var string
 */
$page = isset($page) ? $this->find($page): $this;

if (!function_exists('snippet_pages_tree'
))
{
	function snippet_pages_tree( $page, $level = 0 )
	{
		
$out = array();
		
		foreach ($page->children() as $child)
		{
			$html = $child->link(null, null, true);
			
			if ($child->childrenCount() > 0
)
				$html .= snippet_pages_tree($child, $level + 1);
	
			$out[] = $html;
		}

		return '<ul>' . ($level === 0 ? '<li>' . $page->parent(0)->link() . '</li>': '') . '<li>' . join($out, '</li><li>') .'</li></ul>';
	}
}

echo snippet_pages_tree($page);

?>