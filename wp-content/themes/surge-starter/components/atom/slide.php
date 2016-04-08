 <?php 
 	$vars['image'] = aq_resize($vars[0],1300,1050,true,true,true);
    $vars['class'] = $vars[1];

  ?>
 <div class="item <?php echo $vars['class']; ?>">
                    <img alt="" src="<?php echo $vars['image']; ?>"></img>
                </div>