<?php die; ?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Известные баги и TODO | Flexo CMS — open-souce GPL v3 система управления сайтом на PHP с БД MySQL или SQLite. Простая, расширяемая, небольшой размер. Система управления для сайта-визитки, портфолио, корпоративного сайта.</title>

						
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
														<li><a href="http://flexo.up.dn.ua/документация/известные-баги.html"  class="current">Известные баги и TODO</a>															</li>
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
<a href="http://flexo.up.dn.ua/документация.html" title="Документация">Документация</a> <span class="breadcrumb-separator"> &rarr; </span> 
<span class="breadcrumb-current">Известные баги и TODO</span></div>
					
					<h1>Известные баги и TODO</h1>
					
					<p>-2&hellip;+2 &mdash; приоритет (+2 означает, что изменения могут появиться в новой версии)</p>
<h2>TODO</h2>
<p>&mdash; Добавить уникальные &laquo;примеси&raquo; во все формы, используемые в панели управления для усложнения XSRF (CSRF) атак (<strong>+2</strong>)</p>
<p>&mdash; Добавить соль к паролям, хранящимся в БД (<strong>+2</strong>)</p>
<p>&mdash; Добавить возможность редактирования текстовых файлов в плагине File manager (<strong>+2</strong>)</p>
<p><span style="text-decoration: line-through;">&mdash; Портировать плагин Captcha с Frog CMS 1+ (<strong>+2</strong>)</span> (готово)</p>
<p>&mdash; Переписать сортировку, копироавние страниц, используя плагин jQuery&nbsp;<a href="http://mjsarfatti.com/sandbox/nestedSortable/">nestedSortable</a>.&nbsp;Нет возможности при сортировке перенести страницу на уровни, где нет страниц (должна быть создана хотя бы одна страница)&nbsp;(<strong>+2</strong>)</p>
<p>&mdash; Реализовать ограниченный вывод подстраниц в разделе &laquo;Страницы&raquo;, реализовать кнопку &laquo;Еще&hellip;&raquo; либо разбивку на подстраницы (<strong>+2</strong>)</p>
<p>&mdash; Протестировать плагин Tag manager (работа с тэгами, категориями тэгов, получение страниц по тэгу) (<strong>+1</strong>)</p>
<p>&mdash; Добавить плагин комментариев (<strong>+1</strong>)</p>
<p>&mdash; Поработать с UI &laquo;Редактирование страницы&raquo; (<strong>+1</strong>)</p>
<p>&mdash; Добавить возможность редактировать на вкладке &laquo;Страницы&raquo; общие данные, такие как: &laquo;Статус&raquo;, &laquo;Дата&raquo;, &laquo;Шаблон?&raquo; (<strong>+1</strong>)</p>
<p>&mdash; Добавить сообщения &laquo;Пусто. Добавить?&raquo; во все разелы &laquo;Шаблоны&raquo;, &laquo;Сниппеты&raquo;&hellip; если в списке нет ниодного элемента (<strong>+1</strong>)</p>
<p>&mdash; Переписать плагин Page images в Page assets. Добавить возможность прикреплять не только рисунки, но и другие файлы (например файловые архивы) (<strong>+1</strong>)</p>
<p>&mdash; Плагин Logger. Логирование всех событий системы, включая ошибки (<strong>+1</strong>)</p>
<p>&mdash; Отладить работу с БД SQLite (<strong>0</strong>)</p>
<p>&mdash; Плагин визуального редактора Imperavi заменит TinyMCE. Необходимы тесты стабильности, дописать диалоги для вставки контента (<strong>0</strong>)</p>
<p>&mdash; Плагин Catalog, для организации каталога товаров (<strong>0</strong>)</p>
<p>&mdash; Плагин Cart, для организации корзины товаров и онлайн заказов (<strong>0</strong>)</p>
<p>&mdash; Плагин Dashboard, где будут размещаться информационные виджеты (<strong>0</strong>)</p>
<p>&mdash; Плагин Messages для обмена внутренними сообщениями между пользователями системы (<strong>0</strong>)</p>
<p>&mdash; Плагин Todo для организации TODO-списков (<strong>0</strong>)</p>
<p>&mdash; Пересмотреть разворачивание доп. информации о плагине (<strong>-1</strong>)</p>
<p><span style="text-decoration: line-through;">&mdash; В SQLite версии не работает публикация по расписанию. Проблема сравнения дат, функция NOW()</span> (проверить)</p>					
										<div id="disqus">
					<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'flexocms'; // required: replace example with your forum shortname

    // The following are highly recommended additional parameters. Remove the slashes in front to use.
    // var disqus_identifier = 'unique_dynamic_id_1234';
    // var disqus_url = 'http://example.com/permalink-to-page.html';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>					</div>
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