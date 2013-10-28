<!DOCTYPE html>
<html lang=en>
<head>

<title>Gerardo Diaz</title>

<!-- META -->
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, target-densityDpi=160dpi, initial-scale=1">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- iOS -->
<link rel="apple-touch-icon-precomposed" href="wp-content/themes/gerardodiaz/img/ios.png" />

<!-- CSS -->
<link href="/wp-content/themes/gerardodiaz/css/gerardo.css" rel="stylesheet"/>
<link href='/css/contact.css' rel='stylesheet' media='screen' />
<!--<![endif]-->

<!-- TYPEKIT -->
<script type="text/javascript" src="http://use.typekit.com/etf4ydb.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- JS FOR MODAL FORM -->
<script type='text/javascript' src='/js/jquery.js'></script>
<script type='text/javascript' src='/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='/js/contact.js'></script>

<!-- JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> <!--For Tweets-->
<script type="text/javascript" src="/js/jquery.tweet.js"></script><!--For Tweets-->
<script src="http://cdn.lanyrd.net/badges/person-v1.min.js"></script><!--For Lanyrd Conferences-->
<script src="/modernizr.js"></script><!-- CSS3 HTML5 Browser Support -->

<script type='text/javascript'>
    $(document).ready(function(){
        $(".tweet").tweet({
            username: "gerardodm",
            join_text: "auto",
            avatar_size: 0,
            count: 1,
            auto_join_text_default: "", 
            auto_join_text_ed: "",
            auto_join_text_ing: "",
            auto_join_text_reply: "",
            auto_join_text_url: "",
            loading_text: "Loading..."
        });
    });
</script>

<!-- Remy Sharp's JavaScript to serve HTML5 in IE -->
	<!-- [if IE]>
			<script src="/js/ie-html5.js" type="text/javascript"></script>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js> </script>
	<![endif]-->
	
<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19127962-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
<div id="page">

	<header id="masthead">
		<hgroup>
			<h1><a href="<?php echo home_url(); ?>">Gerardo Diaz </a></h1>
			<h2>UI &amp; Web Designer</h2>
		</hgroup>			
				
		<nav>
			<ul class="navbar">
				<li><a href="/about">About</a></li>
				<li><a href="/category/blog">Blog</a></li>
				<li><a href="/inspiration">Inspiration</a></li>
				<li><a href="/portfolio">Gallery</a></li>
				<li id="contact-form"><a href='sms:+16178219886' class='contact'>Contact</a></li>
				
			</ul>
		</nav>
	</header>