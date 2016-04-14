  <?php 
    $vars['class'] = $vars[0];
    $vars['image'] = $vars[1];
    $vars['blurb'] = $vars[2];
    //$vars['link'] = $vars[2];
   ?>
   <div class="spacer team-item <?php echo $vars['class'];  ?>" style="background-image:url(<?php echo $vars['image']; ?>)">
		<h1>Join the Team</h1>
		<p class=""><?php echo strip_tags($vars['blurb']); ?></p>
		<a href="#contact" class="btn">Contact Us</a>
   </div>