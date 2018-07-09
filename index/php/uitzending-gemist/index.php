<?php
$ug_url = 'https://onswestbrabant.nl/uitzending-gemist/';
$ug_content = file_get_contents($ug_url);
$ug_first_step = explode( '<div class="entry-content">' , $ug_content );
$ug_second_step = explode( '</div><!-- .entry-content -->' , $ug_first_step[1] );
$ug_third_step = explode( 'toggleDuration: true,' , $ug_second_step[0] );
$ug_fourth_step = explode( '</script>' , $ug_third_step[1] );
$uitzendinggemist = $ug_fourth_step[1];
echo $uitzendinggemist;
?>
