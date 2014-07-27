<?php $cssRoute = '../../../css/'; ?>
<link rel="stylesheet" href="<?php echo $cssRoute?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $cssRoute?>bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $cssRoute?>pUpgrade.css">
<center><h1>Scaling Issues</h1></center>
<p>
	Although great for small websites, they were very problematic once the website reached a certain level.  
	In particular, they were difficult for "deep-linked" websites, webpages which had multiple sub-categories of 
	navigation.  Getting back out of a sub-navigation was very difficult to implement.
</p>
<p>
	Additionally, they did not have a persistent URL, which meant directly linking to a subset of a framed page, like
	<a href="scale.php" target='_blank'>this</a> resulted in the user being stuck on that page with no obvious navigation to get them back out of the webpage.  Since a user could be directed onto a webpage from a near infinite number of ways, this caused problems with large sites.
</p>