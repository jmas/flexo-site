<?php die; ?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Помочь проекту | Flexo CMS — open-souce GPL v3 система управления сайтом на PHP с БД MySQL или SQLite. Простая, расширяемая, небольшой размер. Система управления для сайта-визитки, портфолио, корпоративного сайта.</title>

		<meta name="keywords" content="flexo cms" />		<meta name="description" content="Проект Flexo CMS open-source, поэтому любая помощь будет очень кстати!" />		
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
					
										<nav id="submenu">
						<ul>
													</ul>
					</nav>
										
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
<span class="breadcrumb-current">Помочь проекту</span></div>
					
					<h1>Помочь проекту</h1>
					
					<p>Проект Flexo CMS open-source, поэтому любая помощь будет очень кстати! Ваша поддержка помогает нам думать, что мы двигаемся в правильном направлении. ;)</p>
<p>Самое простое, что вы можете сделать &mdash; разместить ссылку на наш проект или ретвитнуть <a href="http://twitter.com/flexo_cms">@flexo_cms</a>.</p>
<form style="padding: 0; margin: 1px;" action="wmk:payto" method="get">
<table style="width: 65%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="40" align="center"><img src="/public/images/wmkeeper_32x32.png" alt="" /></td>
<td style="padding-left: 0.5em;"><input type="submit" value="Пожертвовать" /> <input name="Amount" size="4" type="text" value="9" /> WMZ<br /> <input name="Purse" type="hidden" value="Z296944488944" /> WebMoney на кошелек <strong>Z296944488944</strong> &nbsp;<input name="Desc" type="hidden" value="Пожертвование для Денвера" />&nbsp;</td>
</tr>
</tbody>
</table>
</form><form style="padding: 0; margin: 1px;" action="https://money.yandex.ru/charity.xml" method="post">
<table style="width: 65%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="40" align="center"><img src="/public/images/ya_money.gif" alt="" /></td>
<td style="padding-left: 0.5em;"><input name="to" type="hidden" value="41001746157755" /> <input name="CompanyName" type="hidden" value="Денвер" /> <input name="CompanyLink" type="hidden" value="http://www.denwer.ru" /> <input type="submit" value="Пожертвовать" /> <input id="CompanySum" name="CompanySum" size="4" type="text" value="199" /> руб.<br /> Яндекс.Деньгами на счёт <strong>41001746157755</strong></td>
</tr>
</tbody>
</table>
</form>
<h2>Помогли проекту</h2>
<ul>
<li><strong>Владимир (vold1957)</strong>&nbsp;пожертвовал&nbsp;20$</li>
</ul>					
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