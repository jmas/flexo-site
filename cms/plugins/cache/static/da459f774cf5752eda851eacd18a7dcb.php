<?php die; ?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Документация | Flexo CMS — open-souce GPL v3 система управления сайтом на PHP с БД MySQL или SQLite. Простая, расширяемая, небольшой размер. Система управления для сайта-визитки, портфолио, корпоративного сайта.</title>

		<meta name="keywords" content="документация, flexo cms, разработчикам, пользователям, инструкция, установка, ошибки, исправление, mysql, php, sqlite" />		<meta name="description" content="В разделе Документация для Flexo CMS находятся инструкции по установке, настройке Flexo CMS. Так найдете установку плагинов, расширений, сниппетов. Разберетесь как создавать плагины. Список констант." />		
		<link rel="search" type="application/opensearchdescription+xml" title="flexo" href="http://flexo.up.dn.ua/search.xml">

		<link href="http://flexo.up.dn.ua/public/themes/flexo/favicon.ico" rel="favourites icon" />
		
		<link href="http://flexo.up.dn.ua/public/themes/flexo/stylesheets/layout.css" media="screen" rel="stylesheet" type="text/css" charset="utf-8" />
		
		<!--[if lt IE 9]>
		<script src="http://flexo.up.dn.ua/public/themes/flexo/javascripts/html5.js"></script>
		<![endif]-->

		<script src="http://flexo.up.dn.ua/public/themes/flexo/javascripts/sh/sh.js"></script>

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
	<body onload="sh_highlightDocument('http://flexo.up.dn.ua/public/themes/flexo/javascripts/sh/lang/', '.js');">
		
		<div id="layout">
			<div id="headerWrapper">
			<header id="header">
				<div id="logo"><a href="http://flexo.up.dn.ua/"><img src="http://flexo.up.dn.ua/public/themes/flexo/i/logo.png" alt="Система Управления Контентом на PHP, использует MySQL/SQLite БД, под лицензией GPL v3" /> <big>Flexo CMS</big></a></div>
				
				<nav id="menu">
					<ul>
						<li ><a href="http://flexo.up.dn.ua/">Описание</a></li>
						<li><a href="https://github.com/flexocms/flexo1.source">Скачать</a> <small>0.1.5RC</small></li>
<!--	<li><a href="http://code.google.com/p/flexo-manage-content/downloads/list">Скачать</a> <small>0.1.4RC</small></li> -->
												<li class="current"><a href="http://flexo.up.dn.ua/документация.html" >Документация</a></li>
												<li ><a href="http://flexo.up.dn.ua/расширения.html" >Расширения</a></li>
												<li><a href="https://groups.google.com/d/forum/flexo-manage-content">Обсуждения</a></li>
					</ul>
				</nav>
				<div id="coins"><a href="http://flexo.up.dn.ua/помочь-проекту.html" title="Помочь проекту"><img src="http://flexo.up.dn.ua/public/themes/flexo/i/coins.png" alt="Помочь проекту" /></a></div>
				<div id="plusWidget"><g:plusone size="small"></g:plusone></div>
			</header>
			</div>
			
			<div id="middler">
				<aside id="sidebar">
					
										<nav id="submenu">
						<ul>
														<li><a href="http://flexo.up.dn.ua/документация/flexo-cms-license.html" >Flexo CMS license</a>															</li>
														<li><a href="http://flexo.up.dn.ua/документация/вопросы-и-ответы.html" >Вопросы и ответы</a>															</li>
														<li><a href="http://flexo.up.dn.ua/документация/разработчикам.html" >Разработчикам</a>															</li>
														<li><a href="http://flexo.up.dn.ua/документация/работа-с-плагинами.html" >Работа с плагинами</a>															</li>
														<li><a href="http://flexo.up.dn.ua/документация/история-версий.html" >История версий</a>															</li>
														<li><a href="http://flexo.up.dn.ua/документация/известные-баги.html" >Известные баги и TODO</a>															</li>
														<li><a href="http://flexo.up.dn.ua/документация/обновление-системы.html" >Обновление системы</a>															</li>
													</ul>
					</nav>
										
										
					<form id="searchForm" action="http://flexo.up.dn.ua/поиск.html">
						<p class="query"><input class="input-text" type="text" name="as_q" placeholder="Поиск по сайту" ></p>
						<input type="hidden" name="cx" value="004097457030387064206:ni41yjgctwy" />
						<input type="hidden" name="client" value="004097457030387064206:ni41yjgctwy" />
						<input type="hidden" name="cof" value="FORID:9" />
						<input type="hidden" name="ie" value="UTF-8" />
					</form>

					<p id="orphusContainer"><script src="http://flexo.up.dn.ua/public/themes/flexo/javascripts/orphus.js"></script><a href="http://orphus.ru" id="orphus" target="_blank"><img src="http://flexo.up.dn.ua/public/themes/flexo/i/orphus.gif" alt="Система Orphus" /></a></p>

				</aside>
				
				<div id="content">
					<div class="breadcrumb">
<span class="breadcrumb-current">Документация</span></div>
					
					<h1>Документация</h1>
					
					<ul><li><a href="http://flexo.up.dn.ua/документация/flexo-cms-license.html" >Flexo CMS license</a></li><li><a href="http://flexo.up.dn.ua/документация/вопросы-и-ответы.html" >Вопросы и ответы</a></li><li><a href="http://flexo.up.dn.ua/документация/разработчикам.html" >Разработчикам</a><ul><li><a href="http://flexo.up.dn.ua/документация/разработчикам/установка-flexo-cms.html" >Установка системы</a></li><li><a href="http://flexo.up.dn.ua/документация/разработчикам/настройка-конфига.html" >Настройка конфига</a></li><li><a href="http://flexo.up.dn.ua/документация/разработчикам/структура-директорий.html" >Структура директорий</a></li><li><a href="http://flexo.up.dn.ua/документация/разработчикам/сниппеты.html" >Сниппеты</a></li><li><a href="http://flexo.up.dn.ua/документация/разработчикам/шаблоны.html" >Шаблоны</a></li><li><a href="http://flexo.up.dn.ua/документация/разработчикам/построение-меню-и-информационных-лент.html" >Построение меню и информационных лент</a></li></ul></li><li><a href="http://flexo.up.dn.ua/документация/работа-с-плагинами.html" >Работа с плагинами</a><ul><li><a href="http://flexo.up.dn.ua/документация/работа-с-плагинами/плагин-page-images.html" >Плагин Page images</a></li><li><a href="http://flexo.up.dn.ua/документация/работа-с-плагинами/плагин-cache.html" >Плагин Cache</a></li><li><a href="http://flexo.up.dn.ua/документация/работа-с-плагинами/установка-плагинов.html" >Установка плагинов</a></li></ul></li><li><a href="http://flexo.up.dn.ua/документация/история-версий.html" >История версий</a></li><li><a href="http://flexo.up.dn.ua/документация/известные-баги.html" >Известные баги и TODO</a></li><li><a href="http://flexo.up.dn.ua/документация/обновление-системы.html" >Обновление системы</a></li></ul>					
									</div><!--/#content-->
			</div><!--/#middler-->
			
			<footer id="footer">
				<p class="copyrights">&copy; Maslakov Alexander and Flexo dev team, 2010…2016</p>
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