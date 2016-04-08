  <?php 
    $vars['title'] = $vars[0];
    $vars['link_text'] = $vars[1];
    $vars['link_location'] = $vars[2];
    $vars['repeater'] = $vars[3];
    $vars['active_class'] = NULL;
  
   ?>
  <div class="carousel slide carousel-fade col-md-8" data-ride="carousel" id="carousel">
            <!-- Wrapper for slides -->
            <div id="hero-text">
            	<h1>
                    <?php echo  strip_tags($vars['title'],'<br></br>'); ?>
                </h1>
                    <a class="btn view" href="<?php echo $vars['link_location']; ?>">
                        <?php echo  $vars['link_text']; ?>
                    </a>
            </div>
            <div class="carousel-inner" role="listbox">
            <?php for ($i=0; $i < sizeof($vars['repeater']); $i++) { 
                //set active class
                if ($i == 0) {  $vars['active_class'] = 'active';  } else { $vars['active_class'] = NULL; }
                    //get slide component
                    addComponent([
                            'template' => 'atom/slide',
                            'vars' => [
                                        $vars['repeater'][$i]['image'],
                                        $vars['active_class']
                                        ]
                    ]);
            } ?>    
            </div>
        </div> 


      