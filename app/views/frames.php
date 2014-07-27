<?php $frameRoute = 'frames/'; ?>
<?php $cssRoute = '../css/'; ?>
<link rel="stylesheet" href="<?php echo $cssRoute?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $cssRoute?>bootstrap-theme.min.css">

		<!-- <section> -->
   
        <frameset cols="20%, 80%">
  <frameset rows="100, 200">
      <frame src='<?php echo $frameRoute?>topLinks.php'>
      <frame src='<?php echo $frameRoute?>bottomLinks.php'>
  </frameset><!-- End Rows -->
  <frame src="<?php echo $frameRoute?>mainContent.php" name='mainFrame'>
  <noframes>
  <!-- This had to exist because of google. -->
      This frameset document contains:
      <ul>
         <li><a href="<?php echo $frameRoute?>topLinks.php">
         Top-level links</a>.</li>
         <li><a href="<?php echo $frameRoute?>bottomLinks.php" 
         >Bottom-level links</a>.</li>
         <li>
         <a href="<?php echo $frameRoute?>mainContent.php">
         Some other neat contents
         </a>
         </li>
      </ul>
  </noframes>
</frameset> <!-- End cols -->


