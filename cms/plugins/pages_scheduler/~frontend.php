<?php if(!defined('CMS_ROOT')) die;

class PIFrontImages
{
	public $page_id;
	
	public function __construct($page_id)
	{
		$this->page_id = $page_id;
	}
	
	static function find($args = array())
	{
		// Collect attributes...
		$where   = isset($args['where'])  ? $args['where']: '1=1';
		$order   = isset($args['order'])  ? $args['order']: 'created_date';
		$offset  = isset($args['offset']) ? $args['offset']: 0;
		$limit   = isset($args['limit'])  ? $args['limit']: 0;
		
		// Prepare query parts
        $limit_string = $limit > 0 ? "LIMIT $offset, $limit" : '';
		$where = "$where ORDER BY $order $limit_string";
		
		return Record::findAllFrom('PIImage', $where);
	}
	
	public function findAll($args = array())
	{
		$args['where'] = isset($args['where']) ? $args['where']: 'page_id="'.$this->page_id.'"';
		
		return self::find($args);
	}
	
	public function findOne($offset = 0)
	{
		$items = self::find(array('where' => 'page_id="'.$this->page_id.'"', 'limit' => 1, 'offset' => $offset));
		
		if ( !empty($items))
			return array_pop($items);
		else
			return false;
	}
	
	public function count()
	{
		return Record::countFrom('PIImage', 'page_id = "'. (int)$this->page_id .'"');
	}
} // end class PIFrontImages


function pi_frontpage_found_handler($page)
{
	$page->pi = new PIFrontImages($page->id);
}


// Add class PIImage to autoloader
AutoLoader::addFile('PIImage', PLUGINS_ROOT . '/page_images/PIImage.php');

// Observe
Observer::observe('frontpage_found', 'pi_frontpage_found_handler');
Observer::observe('frontpage_children_found', 'pi_frontpage_found_handler');