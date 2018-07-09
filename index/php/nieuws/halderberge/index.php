<?php
	setlocale(LC_ALL, 'nl_NL');

  $doc = new DOMDocument();
  $doc->load('http://onswestbrabant.nl/category/Halderberge/feed');
  $arrFeeds = array();
  foreach ($doc->getElementsByTagName('item') as $node) {
    $itemRSS = array ( 
      'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
      'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
      'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
      'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
      );
    array_push($arrFeeds, $itemRSS);
  }
?>

			<h3 class="hNieuws"><?php print_r($arrFeeds[0]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[0]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[0]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[0]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[1]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[1]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[1]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[1]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[2]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[2]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[2]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[2]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[3]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[3]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[3]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[3]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[4]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[4]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[4]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[4]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[5]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[5]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[5]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[5]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[6]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[6]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[6]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[6]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[7]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[7]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[7]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[7]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[8]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[8]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[8]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[8]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
			
			<h3 class="hNieuws"><?php print_r($arrFeeds[9]['title']); ?></h3>
			<span class="spanNieuws">Gepubliceerd op: <?php
			echo strftime('%A, %e %B %Y %H:%M:%S', strtotime($arrFeeds[9]['date']));
			?></span>
			<p class="pNieuws"><?php print_r($arrFeeds[9]['desc']); ?>&#8230;
			<a href="<?php print_r($arrFeeds[9]['link']); ?>" target="external" class="alink"> Lees meer</a>
			</p>
