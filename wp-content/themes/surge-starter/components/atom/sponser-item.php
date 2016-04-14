<?php 
	 $vars['id'] = $vars[0];
	 $vars['class'] = $vars[1];
	 $vars['img'] = aq_resize($vars[2],120,180,false,true,true);
	 $vars['title'] = $vars[3];
	 $vars['blurb'] = $vars[4];
 ?>
<li class="<?php echo $vars['class']; ?>">
                    <small class="col-xs-12">
                    <?php echo  $vars['blurb']; ?>
                    </small>
                <img alt="<?php echo  $vars['title']; ?>" src="<?php echo $vars['img']; ?>">
                </img>
            </li>