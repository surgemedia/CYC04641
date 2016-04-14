<?php 
	 $vars['id'] = $vars[0];
	 $vars['class'] = $vars[1];
	 $vars['title'] = $vars[2];
	 $vars['blurb'] = $vars[3];
 ?>
<div id="<?php echo  $vars['id']; ?>" class="<?php echo $vars['class']; ?>">
        <h1><?php echo  $vars['title']; ?></h1>
        <p><?php echo $vars['blurb']; ?></p>
    </div>