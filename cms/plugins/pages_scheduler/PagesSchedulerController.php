<?php if(!defined('CMS_ROOT')) die;

class PagesSchedulerController extends PluginController
{
    // index action
    public function index()
    {
        // Add resources
        Plugin::addJavascript('pages_scheduler', 'js/fullcalendar/fullcalendar.min.js');
        Plugin::addStylesheet('pages_scheduler', 'js/fullcalendar/fullcalendar.css');
        
        $this->setLayout('backend');
        $this->display('pages_scheduler/views/index', array(
            
        ));
    }
    
    
    public function feed()
    {
        if (empty($_GET['start']) || empty($_GET['end'])) {
            throw new Exception('Wrong request params!');
        }
        
        $startUnixtime = (int) $_GET['start'];
        $endUnixtime = (int) $_GET['end'];
        
        $pages = Record::findAllFrom(
            'Page',
            'published_on > FROM_UNIXTIME(' . $startUnixtime . ')
                AND published_on < FROM_UNIXTIME(' . $endUnixtime . ')'
        );
        
        $result = array();
        
        if ($pages) {
            foreach ($pages as $page) {
                $result[] = array(
                    'title' => $page->title,
                    'start' => strtotime($page->published_on),
                    'url' => get_url('page/edit/' . $page->id),
                );
            }
        }
        
        echo json_encode($result);
    }
    
} // end class PagesSchedulerController