<?php 
/*=====================================
=            Add Component            =
=====================================*/
//Example Use

// addComponent([
// 		'template' => 'components/page-header',
// 		'vars' => [get_the_title()]
// ]);

function addComponent($files = Array()){
			$styleDir = '';
			$compDir = 'components/';
			$vars = $files['vars'];
			//Set bucket for styles
			$files['concatStyles'] = NULL;
			if(isset($files['styles'])){
				for ($i=0; $i < sizeof($files['styles']); $i++) { 
					//add into on string and add to bucket
					$files['concatStyles'] .= " ".file_get_contents($styleDir.$files['styles'][$i].'.css');
				}
			}
			include(locate_template($compDir.$files['template'].'.php'));
			unset($files);
			unset($vars);
			}