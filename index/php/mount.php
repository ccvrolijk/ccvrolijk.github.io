<?php
$ug_url = 'https://media2.onswestbrabant.nl:8000/status.xsl';
$ug_content = file_get_contents($ug_url);
$ug_first_step = explode( '<h3 class="mount">Mount Point /OWBLiveMP3</h3>' , $ug_content );
//$ug_second_step = explode( '</div><!-- .entry-content -->' , $ug_first_step[1] );
//$ug_third_step = explode( 'toggleDuration: true,' , $ug_second_step[0] );
//$ug_fourth_step = explode( '</script>' , $ug_third_step[1] );
$uitzendinggemist = $ug_first_step[0];
echo $uitzendinggemist;
?>
