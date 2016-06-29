<?php 
	 $vars['id'] = $vars[0];
	 $vars['class'] = $vars[1];
	 $vars['img'] = $vars[2];
	 $vars['title'] = $vars[3];
	 $vars['blurb'] = $vars[4];
 ?>
<li class="<?php echo $vars['class']; ?>">
                    <small class="col-xs-12">
                    <?php echo  $vars['blurb']; ?>
                    </small>
                <img width="120" height="auto" alt="<?php echo  $vars['title']; ?>" src="<?php echo $vars['img']; ?>">
                </img>
            </li>