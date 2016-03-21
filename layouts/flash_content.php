<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<title><?php echo $this->title(); ?></title>
	
		<?php if($this->keywords()): ?><meta name="keywords" content="<?php echo($this->keywords()); ?>" /><?php endif; ?>
		<?php if($this->description()): ?><meta name="description" content="<?php echo($this->description()); ?>" /><?php endif; ?>
	
		<link href="<?php echo PUBLIC_URL; ?>themes/flexo/favicon.ico" rel="favourites icon" />
	
		<script src="<?php echo PUBLIC_URL; ?>themes/flexo/autoviewer/swfobject.js" type="text/javascript"></script>
		<style type="text/css">	
			/* hide from ie on mac \*/
			html {
				height: 100%;
				overflow: hidden;
			}	
			#flashcontent {
				height: 100%;
			}
			/* end hide */
			body {
				height: 100%;
				margin: 0;
				padding: 0;
				background-color: #181818;
				color:#ffffff;
				font-family:sans-serif;
				font-size:40;
			}	
			a {	
				color:#cccccc;
			}
		</style>
	</head>
	<body>
		<div id="flashcontent">AutoViewer requires JavaScript and the Flash Player. <a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a> </div>	
	
		<?php echo $this->content(); ?>
	
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