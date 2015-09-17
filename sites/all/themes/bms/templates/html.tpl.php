<!DOCTYPE html>
<html lang="en">
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="description" content="OBRIEN Document Solutions" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30103608-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
