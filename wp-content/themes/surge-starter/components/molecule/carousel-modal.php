  <?php 
    $vars['repeater'] = $vars[0];
    $vars['active_class'] = NULL;
   ?>
 <!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
           <div class="carousel-inner">
           

 			<?php for ($i=0; $i < sizeof($vars['repeater']); $i++) { 
                //set active class
                 //debug( $vars['repeater'] );
                if ($i == 0) {  $vars['active_class'] = 'active';  } else { $vars['active_class'] = NULL; }
                    //get slide component
                    addComponent([
                            'template' => 'atom/slide',
                            'vars' => [
                            			$vars['repeater'][$i]['url'],
                                        $vars['active_class']
                                        ]
                    ]);
            } ?>    
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              </div>
            </div>
            </div>
          </div>
        </div>