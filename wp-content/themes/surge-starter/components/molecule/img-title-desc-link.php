  <?php 
    $vars['img'] =  aq_resize($vars[0],700,700,true,true,true);;
    $vars['title'] = $vars[1];
    $vars['description'] = $vars[2];
    $vars['link_text'] = $vars[3];
    $vars['link_location'] =  $vars[4];
    $vars['link_text2'] =  $vars[5];
    $vars['link_location2'] =  $vars[6];
    $vars['target'] = NULL;

    if(strlen($vars['link_text2'])){
        $vars['target'] = '_blank';
    }

   ?>
<div class="col-md-4 photo-block text-center" style="background-image:url(<?php echo $vars['img'] ?>)">
            <h2><?php echo $vars['title']; ?></h2>
            <p>
            <?php echo $vars['description']; ?>
            </p>
            <a <?php if($vars['link_text2'] != NULL){ echo 'target="_blank"';} ?> class="btn view" href="<?php echo $vars['link_location']; ?>">
               <?php echo $vars['link_text']; ?>
            </a>
            <?php if(strlen($vars['link_text2']) > 0){ ?>
             <a class="btn view" target="<?php echo $vars['target']; ?>" href="<?php echo  $vars['link_location2']; ?>">
               <?php echo $vars['link_text2']; ?>
            </a>
			<?php } ?>
        </div>