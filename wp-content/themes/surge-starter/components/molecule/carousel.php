  <?php 
    $vars['title'] = $vars[0];
    $vars['link_text'] = $vars[1];
    $vars['repeater'] = $vars[2];
    $vars['active_class'] = NULL;
  
   ?>
  <div class=" col-md-8" id="carousel" style="background-image: url(<?php echo $vars['repeater'][0]['image'] ?>)">
    
            <!-- Wrapper for slides -->
            <div id="hero-text">
            	<h1>
                    <?php echo  strip_tags(str_replace('&nbsp;','<br>',$vars['title']),'<br>'); ?>
                </h1>
                    <a class="btn view"  data-toggle="modal" data-target=".bs-example-modal-lg" >
                        <?php echo  $vars['link_text']; ?>
                    </a>
            </div>
        
        </div> 


      