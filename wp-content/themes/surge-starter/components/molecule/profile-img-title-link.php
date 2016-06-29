<?php 
	 $vars['id'] = $vars[0];
	 $vars['class'] = $vars[1];
	 $vars['img'] = aq_resize($vars[2],700,700,true,true,true);
	 $vars['title'] = $vars[3];
	 $vars['blurb'] = $vars[4];
	 $vars['link'] = $vars[5];
     //debug($vars);
?>
<div id="<?php echo $vars['id'] ?>" class="<?php echo  $vars['class']; ?>" style="background-image:url(<?php echo $vars['img']; ?>)">
<div class="row">
    <div class="img col-md-12">
    <!-- <img src="" alt=""> -->
        <div class="header">
        <a  class="close-btn col-xs-1">
            <i class="icon-close"></i>
        </a>
        <h1 class="col-xs-10 col-xs-push-1">
          <?php echo $vars['title']; ?>
        </h1>
        <a class="view col-xs-12" data-parent="<?php echo $vars['id'] ?>">
            View Profile
        </a>
        <div data-Blurb="<?php echo $vars['id'] ?>" class="blurb col-md-12">
            <p><?php echo  $vars['blurb']; ?></p>
        </div>
        </div>
    </div>
        </div>
    </div>