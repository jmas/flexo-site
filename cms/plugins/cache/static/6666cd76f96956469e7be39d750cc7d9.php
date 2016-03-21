<?php die; ?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Описание системы | Flexo CMS — open-souce GPL v3 система управления сайтом на PHP с БД MySQL или SQLite. Простая, расширяемая, небольшой размер. Система управления для сайта-визитки, портфолио, корпоративного сайта.</title>

		<meta name="keywords" content="flexo, флексо, простая, надежная, быстрая, система управления сайтом, cms, цмс, сайт, контент, управление сайтом, администрирование сайта, сниппет, шаблон, админка, плагин, вставка изображений, WYSIWYG, TinyMCE, php, mysql, sqlite, frog cms, wolf cms, gpl" />		<meta name="description" content="Flexo CMS — open-source GPL система управления сайтом, написанная на PHP, использующая базы данных MySQL или SQLite. Основные принципы: простота, понятность, в тоже время высокая гибкость.  Скачать, документация, плагины, расширения, сниппеты, скриншоты." />		
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
						<li class="current"><a href="http://flexo.up.dn.ua/">Описание</a></li>
						<li><a href="https://github.com/flexocms/flexo1.source">Скачать</a> <small>0.1.5RC</small></li>
<!--	<li><a href="http://code.google.com/p/flexo-manage-content/downloads/list">Скачать</a> <small>0.1.4RC</small></li> -->
												<li ><a href="http://flexo.up.dn.ua/документация.html" >Документация</a></li>
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
					
										
					<div id="sidebarIcons">
	<a href="http://flexo.up.dn.ua/скриншоты.html"><img src="http://flexo.up.dn.ua/public/images/mac-icon.png" alt="Screenshots" /> <u>Скриншоты</u></a>
	<a href="http://code.google.com/p/flexo-manage-content/downloads/list"><img src="http://flexo.up.dn.ua/public/images/download-icon.png" alt="Download" /> <u>Скачать</u></a>
</div>

<div id="tweets"></div>

<div id="ggroups"></div>

<script>
// get twets
/*window.ajax('http://flexo.up.dn.ua/tweets.html', function()
{
	if (this.readyState !== 4) return;
	
	document.getElementById('tweets').innerHTML = this.responseText;
});*/

// get groups
/*window.ajax('http://flexo.up.dn.ua/googlegroupstest.html', function()
{
	if (this.readyState !== 4) return;
	
	document.getElementById('ggroups').innerHTML = this.responseText;
});*/
</script>					
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
<span class="breadcrumb-current">Описание системы</span></div>
					
					<h1>Описание системы</h1>
					
					<p>Flexo CMS &mdash; система управления сайтом на PHP, использует базу данных MySQL либо SQLite. Является open-source решением, распространяется по лицензии GPL v3. Основные принципы системы: гибкость, расширяемость, маленький размер. Система будет удобна как разработчикам, так и пользователям. Основные сферы применения: личные сайты, блоги, портфолио, галереи, корпоративные, новостные сайты.</p>
<p>Корни Flexo CMS уходят к руби-приложению Radiant CMS. Канадец Philippe Archambault портировал это приложение на PHP под названием phpRadiant, затем изменил название на Frog CMS. Несколько лет сообщество активно развивало систему, но затем проект был заморожен. Бывшее сообщество Frog CMS начало развивать ответвление &mdash; Wolf CMS, но работа над этой версией на данный момент протекает достаточно медленно. Тем временем мы занимались усовершенствованием Frog CMS. Когда изменений накопилось достаточно много &mdash; было принято решение отделиться: так появился проект Flexo CMS.</p>
<p>Системы Frog CMS, Wolf CMS и Flexo CMS объединяют следующие качества:&nbsp;гибкость, расширяемость, небольшой размер.</p>
<h2>Система обладает рядом возможностей:</h2>
<ul>
<li>Не ограниченный уровень вложенности страниц</li>
<li>Удобное API для подключения плагинов (на основе системы событий)</li>
<li>Удобный доступ к дереву сайта для построения разнообразных меню</li>
<li>Плагины Page images и Page fields, позволяющие подключить неограниченное количество изображений и полей к страницам</li>
<li>Удобный плагин файлового менеджера, который интегрирован в плагин WYSIWYG-редактора, поэтому вставлять различный медиа-контент в редактор удобно</li>
<li>Плагин WYSIWYG-редактора с возможностью настройки панелей кнопок</li>
<li>Возможность работать как с WYSIWYG-редактором, так и с&nbsp;PHP-кодом</li>
<li>Несколько пользовательских ролей: Администратор, Разработчик, Редактор</li>
<li>Гибкие шаблоны. Возможность использовать люб любую HTML-верстку. Есть возможность отдавать данные разного типа, например, JSON, XML</li>
<li>Миниатюрный MVC фреймверк. В системе используется ООП подход</li>
<li>Человекопонятные URL. (Возможность использовать без включенного модуля mod_rewrite). Кириллические URL адреса</li>
<li>Небольшой размер установочного архива (не больше мегабайта)</li>
<li>Высокая скорость работы (плагин кэширования позволяет увеличить производительность на достаточно больших проектах)</li>
</ul>
<h2>Характерные отличия Flexo CMS от Frog CMS и Wolf CMS:</h2>
<ul>
<li>Переработан лэйаут админ-части, улучшено юзабилити интерфейса, заложена основа для создания более функциональных плагинов</li>
<li>Переработан JavaScript код админ-части, используется библиотека jQuery UI</li>
<li>Полностью переписан файловый менеджер, интегрирован в различные части системы, включая WYSIWYG-редактор</li>
<li>Интегрирован диалог для автоматической загрузки большого числа файлов</li>
<li>Введена защита &laquo;частей&raquo; страницы от редактирования пользователями с ролью &laquo;редактор&raquo;, что позволяет давать доступ клиентам, не опасаясь, что будет испорчен PHP-код &laquo;частей&raquo;&nbsp;</li>
<li>Добавлен выбор ролей для доступа к редактированию страниц</li>
<li>Переработан установщик системы, добавлены дополнительные проверки</li>
<li>Исправлены мелкие ошибки</li>
<li>Проверка на устаревшие браузеры и отключенный JavaScript у клиентов</li>
<li>Переработан русскоязычный перевод</li>
<li>Улучшены плагины. Появились функциональные плагины Image resizing, Page images, Page fields</li>
<li>Контролируется качество сторонних плагинов</li>
<li>Улучшена общая защищенность системы</li>
<li>Ориентация на русскоязычных пользователей, русскоязычная поддержка</li>
</ul>
<p>Вы можете взглянуть на <a href="/скриншоты.html">скриншоты</a>, либо <a href="http://code.google.com/p/flexo-manage-content/downloads/list">скачать Flexo CMS</a>. Вам понадобиться <a href="/документация/разработчикам/установка-flexo-cms.html">инструкция по установке Flexo CMS</a>.</p>					
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