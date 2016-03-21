<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title><?php echo $this->title(); ?> | Flexo CMS — open-souce GPL v3 система управления сайтом на PHP с БД MySQL или SQLite. Простая, расширяемая, небольшой размер. Система управления для сайта-визитки, портфолио, корпоративного сайта.</title>

		<?php if($this->keywords()): ?><meta name="keywords" content="<?php echo($this->keywords()); ?>" /><?php endif; ?>
		<?php if($this->description()): ?><meta name="description" content="<?php echo($this->description()); ?>" /><?php endif; ?>
		
		<link rel="search" type="application/opensearchdescription+xml" title="flexo" href="<?php echo BASE_URL; ?>search.xml">

		<link href="<?php echo PUBLIC_URL; ?>themes/flexo/favicon.ico" rel="favourites icon" />
		
		<link href="<?php echo PUBLIC_URL; ?>themes/flexo/stylesheets/layout.css" media="screen" rel="stylesheet" type="text/css" charset="utf-8" />
		
		<!--[if lt IE 9]>
		<script src="<?php echo PUBLIC_URL; ?>themes/flexo/javascripts/html5.js"></script>
		<![endif]-->

		<script src="<?php echo PUBLIC_URL; ?>themes/flexo/javascripts/sh/sh.js"></script>

		<script src="https://apis.google.com/js/plusone.js"></script>

		<script>
			window.ajax = function(url, callback)
			{
				if (window.XMLHttpRequest)
				{
					request = new XMLHttpRequest();
					request.onreadystatechange = callback;
					request.open("GET", url, true);
					request.send(null);
				}
				else if (window.ActiveXObject)
				{
					request = new ActiveXObject("Microsoft.XMLHTTP");
					if (request)
					{
						request.onreadystatechange = callback;
						request.open("GET", url, true);
						request.send();
					}
				}
			}
		</script>
	</head>
	<body onload="sh_highlightDocument('<?php echo PUBLIC_URL; ?>themes/flexo/javascripts/sh/lang/', '.js');">
		
		<div id="layout">
			<div id="headerWrapper">
			<header id="header">
				<div id="logo"><a href="<?php echo get_url(); ?>"><img src="<?php echo PUBLIC_URL; ?>themes/flexo/i/logo.png" alt="Система Управления Контентом на PHP, использует MySQL/SQLite БД, под лицензией GPL v3" /> <big>Flexo CMS</big></a></div>
				
				<nav id="menu">
					<ul>
						<li <?php if(!$this->slug) echo('class="current"'); ?>><a href="<?php echo CMS_URL; ?>">Описание</a></li>
						<li><a href="https://github.com/flexocms/flexo1.source">Скачать</a> <small>0.1.5RC</small></li>
<!--	<li><a href="http://code.google.com/p/flexo-manage-content/downloads/list">Скачать</a> <small>0.1.4RC</small></li> -->
						<?php foreach ($this->parent(0)->children() as $page): ?>
						<li <?php if(strstr($this->url, $page->url) !== false) echo('class="current"'); ?>><?php echo $page->link(); ?></li>
						<?php endforeach; ?>
						<li><a href="https://groups.google.com/d/forum/flexo-manage-content">Обсуждения</a></li>
					</ul>
				</nav>
				<div id="coins"><a href="<?php echo get_url('помочь-проекту'); ?>" title="Помочь проекту"><img src="<?php echo PUBLIC_URL; ?>themes/flexo/i/coins.png" alt="Помочь проекту" /></a></div>
				<div id="plusWidget"><g:plusone size="small"></g:plusone></div>
			</header>
			</div>
			
			<div id="middler">
				<aside id="sidebar">
					
					<?php if ($this->parent(1)): ?>
					<nav id="submenu">
						<ul>
							<?php foreach ($this->parent(1)->children() as $page): ?>
							<li><?php echo $page->link(null, null, true); ?>
								<?php if (strstr($this->url, $page->url) !== false && $page->childrenCount() > 0): ?>
								<ul>
									<?php foreach ($page->children() as $child): ?>
									<li><?php echo $child->link(null, null, true); ?></li>
									<?php endforeach; ?>
								</ul>
								<?php endif; ?>
							</li>
							<?php endforeach; ?>
						</ul>
					</nav>
					<?php endif; ?>
					
					<?php echo $this->content('sidebar', true); ?>
					
					<form id="searchForm" action="<?php echo get_url('поиск'); ?>">
						<p class="query"><input class="input-text" type="text" name="as_q" placeholder="Поиск по сайту" ></p>
						<input type="hidden" name="cx" value="004097457030387064206:ni41yjgctwy" />
						<input type="hidden" name="client" value="004097457030387064206:ni41yjgctwy" />
						<input type="hidden" name="cof" value="FORID:9" />
						<input type="hidden" name="ie" value="UTF-8" />
					</form>

					<p id="orphusContainer"><script src="<?php echo PUBLIC_URL; ?>themes/flexo/javascripts/orphus.js"></script><a href="http://orphus.ru" id="orphus" target="_blank"><img src="<?php echo PUBLIC_URL; ?>themes/flexo/i/orphus.gif" alt="Система Orphus" /></a></p>

				</aside>
				
				<div id="content">
					<?php echo $this->breadcrumbs(' &rarr; ', 1); ?>
					
					<h1><?php echo $this->title(); ?></h1>
					
					<?php echo $this->content(); ?>
					
					<?php if ($this->level > 1 && ($this->parent(1)->slug() == 'документация' || $this->parent(1)->slug() == 'расширения')): ?>
					<div id="disqus">
					<?php $this->includeSnippet('disqus'); ?>
					</div>
					<?php endif; ?>
				</div><!--/#content-->
			</div><!--/#middler-->
			
			<footer id="footer">
				<p class="copyrights">&copy; Maslakov Alexander and Flexo dev team, 2010…<?php echo date('Y'); ?></p>
			</footer>
		</div><!--/#layout-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24902622-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Yandex.Metrika counter -->
<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter8520706 = new Ya.Metrika({id:8520706, enableAll: true});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/8520706" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
		
	</body>
</html>