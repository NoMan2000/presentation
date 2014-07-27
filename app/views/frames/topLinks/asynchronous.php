<?php $cssRoute = '../../../css/'; ?>
<link rel="stylesheet" href="<?php echo $cssRoute?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $cssRoute?>bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $cssRoute?>pUpgrade.css">
<center><h1>Asynchronicity</h1></center>
<p>
	This was one of frame's main benefits and it has taken web development a long time to catch up to it.
	Even now, most web pages are synchronous. Each request to the web server returns with a full web page 
	back from the server to the browser, even if only a few minor pieces have changed.  This means most 
	web pages are not optimized for speed from a user's perspective.
</p>
<p>
	AJAX now allows us to take advantage of this feature. The two main ways people implement this are to either 
	use SPAs, (Single Page Apps), which is what this presentation is, or routing frameworks like Ember.js and 
	Angular.js.
</p>