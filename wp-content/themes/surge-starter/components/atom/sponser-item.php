<?php 
	 $vars['id'] = $vars[0];
	 $vars['class'] = $vars[1];
	 $vars['img'] = $vars[2];
	 $vars['title'] = $vars[3];
	 $vars['blurb'] = $vars[4];
     $vars['link'] = $vars[5];

 ?>
<li class="<?php echo $vars['class']; ?>">
        <?php if(strlen( $vars['link']) > 0) { ?>
            <a href="<?php echo $vars['link']; ?>">
            <?php } ?>
                    <small class="col-xs-12">
                    <?php echo  $vars['blurb']; ?>
                    </small>
                <img width="120" height="auto" alt="<?php echo  $vars['title']; ?>" src="<?php echo $vars['img']; ?>">
                </img>
        <?php if(strlen( $vars['link']) > 0) { ?>
                </a>
            <?php } ?>

            </li>