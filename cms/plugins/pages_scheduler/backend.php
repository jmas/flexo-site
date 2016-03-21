<?php if(!defined('CMS_ROOT')) die;

// Add controller to plugins stack
Plugin::addController('pages_scheduler', 'pages_scheduler', array('editor','developer','administrator'));

// Add navigation section
Plugin::addNav('Content', __('Pages Scheduler'), 'plugin/pages_scheduler', array('editor','developer','administrator'), 0);