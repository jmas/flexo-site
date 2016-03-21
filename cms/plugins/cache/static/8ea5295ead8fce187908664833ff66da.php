<?php die; ?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>История версий | Flexo CMS — open-souce GPL v3 система управления сайтом на PHP с БД MySQL или SQLite. Простая, расширяемая, небольшой размер. Система управления для сайта-визитки, портфолио, корпоративного сайта.</title>

		<meta name="keywords" content="история версий, flexo cms, изменения, модификации, последняя версия, история версий" />		<meta name="description" content="История версий Flexo CMS — поможет разработчикам следить за исправлением ошибок в системе управления сайтом." />		
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
														<li><a href="http://flexo.up.dn.ua/документация/история-версий.html"  class="current">История версий</a>															</li>
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
<a href="http://flexo.up.dn.ua/документация.html" title="Документация">Документация</a> <span class="breadcrumb-separator"> &rarr; </span> 
<span class="breadcrumb-current">История версий</span></div>
					
					<h1>История версий</h1>
					
					<p><img style="vertical-align: middle;" src="/public/images/arrow_right.png" alt="" />&nbsp;TODO перенесено в раздел &laquo;<a href="/документация/известные-баги.html">Известные баги и TODO</a>&raquo;.</p>
<h2>0.1.5 RC2 (в разработке)</h2>
<p style="padding-left: 30px;">* Исправлено: Подсветка выделенного пункта меню для плагинов.</p>
<p style="padding-left: 30px;">* Исправлено:&nbsp;Ошибки в русском переводе.</p>
<h2>0.1.4 RC</h2>
<p style="padding-left: 30px;">+ Добавлена новая <a href="/расширения/темы-админ-раздела/тема-special.html">тема панели управления Special</a></p>
<p style="padding-left: 30px;">+ Добавлена поддержка прозрачности для изображение&nbsp;<span class="inline-code">GIF</span>, <span class="inline-code">PNG</span> в классе <span class="inline-code">cms/helpers/SmartImage.php</span></p>
<p style="padding-left: 30px;">+ Добавлена русскоязычная локализация для jQuery UI Datepicker</p>
<p style="padding-left: 30px;">+ Добавлен метод <span class="inline-code">FrontPage::findById()</span></p>
<p style="padding-left: 30px;">+ Добавлено новое событие&nbsp;<span class="inline-code">frontpage_byid_found</span></p>
<p style="padding-left: 30px;">+ Добавлен перехват события&nbsp;<span class="inline-code">frontpage_byid_found</span> для плагина Page images</p>
<p style="padding-left: 30px;">+ Добавлено указание временной зоны при установке</p>
<p style="padding-left: 30px;">* Код&nbsp;<span class="inline-code">FrontPage::getParts()</span> перенесен в <span class="inline-code">FrontPage::content()</span>, изменен код метода&nbsp;<span class="inline-code">FrontPage::hasContent()</span></p>
<p style="padding-left: 30px;">* Улучшена совместимость с&nbsp;БД SQLite (@sartas). Добавлены функции&nbsp;<span class="inline-code">lower</span>,&nbsp;<span class="inline-code">date_format</span></p>
<p style="padding-left: 30px;">* Перешли от использования функции&nbsp;<span class="inline-code">eregi()</span>&nbsp;к&nbsp;<span class="inline-code">ereg()</span> (вызывала deprecated ошибки)</p>
<p style="padding-left: 30px;">* Устранена устаревшая функция&nbsp;<span class="inline-code">ereg()</span>&nbsp;в&nbsp;<span class="inline-code">cms\helpers\Email.php</span>&nbsp;(до v 0.1.3 beta включительно)</p>
<p style="padding-left: 30px;">* Исправлено:&nbsp;При указании в заголовке страницы кавычек-лапок &laquo;"&raquo; они не преобразовываются в HTML-сущности, что ломает отображение заголовка в поле &lt;INPUT&gt;</p>
<p style="padding-left: 30px;">* Исправлено:&nbsp;Копирование сраниц работает не удовлетворительно: после копирования полностью изменяются позиции страниц (решение предложил&nbsp;@sartas)</p>
<p style="padding-left: 30px;">* Исправлено:&nbsp;Пр использовании типа Archive для страницы-раздела происходит переопределение URI для страниц, что не позволяет кэшировать страницы в таком разделе</p>
<p style="padding-left: 30px;">* Ошибка в SQL-запросе в /cms/app/models/Page.php (399). Лишние скобочки в запросе</p>
<p style="padding-left: 30px;">* Исправлено:&nbsp;В файле&nbsp;<span class="inline-code">cms/app/models/User.php</span>&nbsp;необходимо добавить параметр класса&nbsp;<span class="inline-code">$last_login</span></p>
<p style="padding-left: 30px;">* Исправлено: с версии PHP 5.3 функция&nbsp;<span class="inline-code">split()</span>&nbsp;вызывает&nbsp;deprecated ошибки. Перешли к использованию&nbsp;<span class="inline-code">explode()</span></p>
<p style="padding-left: 30px;">* Исправлен баг в <span class="inline-code">schema_sqlite.sql</span>, в таблице <span class="inline-code">tag</span> стояло значение&nbsp;<span class="inline-code">unsigned</span>, не поддерживаемое SQLite (@sartas)</p>
<p style="padding-left: 30px;">* Исправлен баг в плагине File manager, в файле <span class="inline-code">file_manager.js</span>. Не открывался диалог выбора файла &nbsp;в новых версиях Firefox 5 и IE9</p>
<p style="padding-left: 30px;">*&nbsp;Исправлен баг с кэшированием. Теперь используется&nbsp;<span class="inline-code">CURRENT_URI</span>. Помимо этого добавлена отчистка кэша по событиям <span class="inline-code">layout_after_edit</span>, <span class="inline-code">snippet_after_edit</span></p>
<p style="padding-left: 30px;">* Небольшая чистка в плагинах</p>
<p style="padding-left: 30px;">&nbsp;</p>
<h2>0.1.3 beta</h2>
<p style="padding-left: 30px;">+ Добавлен вывод PDO сообщений об ошибках в виде исключений</p>
<p style="padding-left: 30px;">+ Добавлены две кнопки проверки правописания <span class="inline-code">iespell</span>, <span class="inline-code">spellchecker</span> для плагина TinyMCE</p>
<p style="padding-left: 30px;">+ Добавлен метод <span class="inline-code">PIImage::size()</span> возвращающий объект с размерами рисунка, в плагине Page images</p>
<p style="padding-left: 30px;">+ Добавлена инструкция&nbsp;<span class="inline-code">IF NOT EXISTS</span>&nbsp;при создании таблиц&nbsp;в установщики&nbsp;<span class="inline-code">enable.php</span>&nbsp;плагинов Page images, Page fields, Cache.</p>
<p style="padding-left: 30px;">+ Добавлено: Если PHP не поддерживает функции&nbsp;<span class="inline-code">json_encode</span>,&nbsp;<span class="inline-code">json_decode</span>&nbsp;&mdash; их работу будет эмулировать хэлпер&nbsp;<span class="inline-code">JSON.php</span>.&nbsp;<em>(Полностью не протестировано)</em></p>
<p style="padding-left: 30px;">* Исправлен баг в установщике. В схемах <span class="inline-code">mysql</span> и <span class="inline-code">sqlite</span> забыли указать правило для создания таблицы <span class="inline-code">tag</span></p>
<p style="padding-left: 30px;">* Исправлен баг в структуре БД, отсутствовал столбец <span class="inline-code">last_login</span> в таблице <span class="inline-code">user</span></p>
<p style="padding-left: 30px;">* Исправлен баг, когда страница с статусом &laquo;Ожидает&raquo; все равно была доступна в меню и &laquo;лентах&raquo;</p>
<p style="padding-left: 30px;">* Исправлен плагин Cache: после сохранения страницы кэш не обновлялся. Добавлена установка плагина, скрипт <span class="inline-code">enable.php</span>.</p>
<p style="padding-left: 30px;">* Исправлен баг при проверке URI, который не позволял передавать GET-параметры главной странице.</p>
<p style="padding-left: 30px;">* Исправлена недоработка плагина Cache. Не обрабатывалось событие&nbsp;<span class="inline-code">page_add_after_save</span></p>
<p style="padding-left: 30px;">* Переименовано событие&nbsp;<span class="inline-code">page_requested</span> на&nbsp;<span class="inline-code">frontpage_requested</span></p>
<p style="padding-left: 30px;">- Удалена часть кода, отвечающая за проверку плагинов перед активацией &mdash; обнаружены ошибки. Будет возвращена после тестирования и отладки</p>
<h2>0.1.2 beta</h2>
<p style="padding-left: 30px;">* Исправлена ошибка в <span class="inline-code">install/index.php</span>. В <span class="inline-code">config.php</span> не писался пароль к БД</p>
<p style="padding-left: 30px;">* Исправлен Notice, который возникал в <span class="inline-code">index.php</span>, когда <span class="inline-code">$_SERVER['QUERY_STRING']</span> не определена</p>
<p style="padding-left: 30px;">* Тестирование на UNIX сервере</p>
<h2>0.1.0&ndash;0.1.1 beta</h2>
<p style="padding-left: 30px;">Первый публичный релиз.</p>					
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