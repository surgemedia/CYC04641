  <?php 
    $vars['class'] = $vars[0];
    $vars['image'] = $vars[1];
    $vars['blurb'] = $vars[2];
    $vars['title'] = $vars[3];
    $vars['id'] = $vars[4];


    //$vars['link'] = $vars[2];
   ?>
   <div id="<?php echo $vars['id']; ?>" class="content-block team-item <?php echo $vars['class'];  ?>" style="background-image:url(<?php echo $vars['image']; ?>)">
		<h1><?php echo $vars['title'] ?></h1>
		<p class=""><?php echo strip_tags($vars['blurb']); ?></p>
		<a href="#contact" class="btn">Contact Us</a>
   </div>