<?php
$data = new DOMDocument(); $data->load('http://media2.onswestbrabant.nl:8000/OWBLiveMP3.xspf'); 

if($data->load("http://media2.onswestbrabant.nl:8000/OWBLiveMP3.xspf")) { 
    foreach ($data->getElementsByTagName('trackList') as $track) { 
        $title = $track->getElementsByTagName('title')->item(0)->nodeValue;

		$seperated = explode(' - ', $title);

       echo '<a class="alink" target="_new" class="nowplaying" href="https://www.google.nl/search?hl=NL_nl'.urlencode($title).'">Artiest: '.$seperated[0].'<br>Titel: '.$seperated[1].'</a>';
    } 
  }
  ?>
