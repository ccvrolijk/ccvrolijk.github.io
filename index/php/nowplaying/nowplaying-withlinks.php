<?php
$data = new DOMDocument(); $data->load('http://media2.onswestbrabant.nl:8000/OWBLiveMP3.xspf'); 

if($data->load("http://media2.onswestbrabant.nl:8000/OWBLiveMP3.xspf")) { 
    foreach ($data->getElementsByTagName('trackList') as $track) { 
        $title = $track->getElementsByTagName('title')->item(0)->nodeValue;

		$seperated = explode(' - ', $title);
		//print_r($myArray);
       // $info = $track->getElementsByTagNameNS('info')->item(0)->nodeValue;
        //$encoded-title = urlencode($title);
       echo '<a target="_new" class="nowplaying" href="https://www.google.nl/search?hl=NL_nl&q='.urlencode($title).'"><img title="Zoek op Google" src="/index/images/nowplaying/google.ico"></a>
       <a target="_new" class="nowplaying" href="https://duckduckgo.com/?hl=NL_nl&iax=videos&ia=videos&q='.urlencode($title).'"><img title="Zoek op DuckDuckGo" src="/index/images/nowplaying/duckduckgo.ico"></a>
       <a target="external" class="nowplaying" href="https://www.bing.com/search?setlang=nl-nl&q='.urlencode($title).'"><img title="Zoek op Bing" src="/index/images/nowplaying/bing.ico"></a>
       <br>
       <a target="_new" class="nowplaying" href="https://duckduckgo.com/?q='.urlencode($title).'">Artiest: '.$seperated[0].'<br>Titel: '.$seperated[1].'</a>';
        //print($track); 
    } 
  }
  ?>
