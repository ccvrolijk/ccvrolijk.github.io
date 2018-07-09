<!doctype html>
	<html>
		<head>
		 	<title>Ons - WB</title>
		 	<link rel="apple-touch-icon" sizes="57x57" href="/index/images/favicon/apple-icon-57x57.png">
		 	<link rel="apple-touch-icon" sizes="60x60" href="/index/images/favicon/apple-icon-60x60.png">
		 	<link rel="apple-touch-icon" sizes="72x72" href="/index/images/favicon/apple-icon-72x72.png">
		 	<link rel="apple-touch-icon" sizes="76x76" href="/index/images/favicon/apple-icon-76x76.png">
		 	<link rel="apple-touch-icon" sizes="114x114" href="/index/images/favicon/apple-icon-114x114.png">
		 	<link rel="apple-touch-icon" sizes="120x120" href="/index/images/favicon/apple-icon-120x120.png">
		 	<link rel="apple-touch-icon" sizes="144x144" href="/index/images/favicon/apple-icon-144x144.png">
		 	<link rel="apple-touch-icon" sizes="152x152" href="/index/images/favicon/apple-icon-152x152.png">
		 	<link rel="apple-touch-icon" sizes="180x180" href="/index/images/favicon/apple-icon-180x180.png">
		 	<link rel="icon" type="image/png" sizes="192x192"  href="/index/images/favicon/android-icon-192x192.png">
		 	<link rel="icon" type="image/png" sizes="32x32" href="/index/images/favicon/favicon-32x32.png">
		 	<link rel="icon" type="image/png" sizes="96x96" href="/index/images/favicon/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/index/images/favicon/favicon-16x16.png">
			<link rel="manifest" href="/index/images/favicon/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="/index/images/favicon/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
			
		 	<script>


			function volumeSlider(player, slider) {
				document.getElementById(slider).addEventListener('input', function() {
  				document.getElementById(player).volume = this.value / 100;
				}, false);
				document.getElementById(slider).addEventListener('volumechange', function() {
				document.getElementById(player).volume = this.value / 100;
			}, false);
			}
			
			var video = document.getElementById("player");
		

				function controlPlayer(player, playPause) {
				var myAudio = document.getElementById(player);
  				var myControl = document.getElementById(playPause);
				function switchState() {
    				if (myAudio.paused == true) {
    							myAudio.play();
     							myControl.innerHTML = '';
								myControl.innerHTML = '<img class="image" src="/index/images/player/pause1.png"></img>';
								//Below :: Code makes seekbar visible when video/audio is playing ::
								//document.getElementById('seekbar').style.visibility="visible";
    							} else {
      							myAudio.pause();
     							myControl.innerHTML = '';
								myControl.innerHTML = '<img class="image" src="/index/images/player/play1.png"></img>';
								//Below :: Code makes seekbar hidden when video/audio is paused ::
								//document.getElementById('seekbar').style.visibility="hidden";
   					}
  				}
				myControl.addEventListener('click', function() {
    			switchState();
  				}, false);
  
			}

			function changeContent(source, innerhtmlSrc, innerhtmlImg, logoWidth, logoHeight) {
			var myPlayer = document.getElementById('player');
			var myTitle = document.getElementById('title');
			var playpause = document.getElementById('playpause');
			var myLogo = document.getElementById('logo');
			myPlayer.src = source;
			if (myPlayer.autoplay) { myPlayer.removeAttribute('autoplay') ; }
			myTitle.innerHTML = innerhtmlSrc;
			if ( myPlayer.paused || myPlayer.ended || 0 < myPlayer.currentTime) {
   					playpause.innerHTML = '<img class="image" src="/index/images/player/play1.png"></img>';
				}
			myLogo.src = innerhtmlImg;
			myLogo.style.width = logoWidth;
			myLogo.style.height = logoHeight;
			}

			window.addEventListener('load', function() { 
    		controlPlayer('player','playpause','loadTimeOut');
			volumeSlider('player','volume');
			});


			function load_html()
				{
					var axel = Math.random() + "";
					var num = axel * 1000000000000000000
					var client = new XMLHttpRequest();
					client.open('GET', '/index/php/nowplaying/nowplaying-luisterlive.php?nocache='+num);
					client.onreadystatechange = function() {
  						document.getElementById("music_now").innerHTML = client.responseText;
					}
					client.send();
				}
					
			setInterval(function(){
					load_html();
					},5000);
			
			document.onload = load_html();
	
		</script>
		 </head>
		 <body>
		 <?php //include_once("./index/analytics/analyticstracking.php") ?>

		 	<style>
		 	
		 		@font-face {font-family: 'Roboto'; src: url('/index/fonts/roboto.woff2') format('woff');}
				body {overflow:scroll; font-family: Roboto, sans-serif; padding:0; margin:0; font-size:14px;}
				#progress, #logo, #sitelogo, #playlist, #playlist-ul, #bottom, #leftad, #name, #title, #playpause, #mute-img, #volume-img, #tracktime, #volume,
					.totaltime, #player, #seekbar, #music_now , #container {position:relative;}
				#middle {margin:20px auto; height:370px; width:340px; border:1px solid black;}
				#sitelogo {left:65px; top:10px; width:212px; height:52px;}
				#container {left:15px; top:15px; height:30px; width:300px; padding:5px; border:1px solid #076633; font-family: Roboto, sans-serif;}
				#playpause {top:5px; }
				#mute-img { }
				#volume { width:50px; vertical-align: middle; }
				#volume-img { margin-left:5px; vertical-align: middle;}
				#tracktime { width:75px; height:15px; vertical-align: middle;}
				#progress { left:5px; width:76px; vertical-align: middle;}
				.totaltime { margin-left:5px;height:20px; width:75px; vertical-align: middle;}
				#title {left:15px; top:20px; margin:0; width:400px;} /*color:#185c36;*/
				#music_now { left:15px; top:25px; margin:0; width:300px; }
				.nowplaying, .nowplaying img { width:16px; height:16px; padding:0; margin:0; }
				#logo, #logo-a {left:15px; top:45px; width:300px; height:auto; padding:0;}
				.image {width:15px; height:15px; padding:3px;}
				.icecast { width:10px; height:10px; padding:0; margin:0; }
				#playlist { left:15px; top:35px; width:300px; }
				#playlist-ul { padding-left:5px; }
				li { list-style-type: none; }
				#twitter { top:320px; left:5px; height:366px; width:220px; }
				a {text-decoration:none; color:#0e71b8;}
         		#player { display:none; z-index:100; width:1024px; height:576px; left:300px; top:20px; border:20px solid #cbeda6; border-radius:5px; }			
			 	//#seekbar::-webkit-slider-runnable-track { display:none !important; }
								
				//#seekbar {top:62px; left:5px; width:175px; margin:0; padding:0;}
		 	

			</style>
		
		 	
		 	<div id="middle">
		 		<img id="sitelogo" src="/index/images/logos/ons-wb-212x52.png">
		 		
				<div id="container" class="player">
		 			<span id="playpause"><img class="image" src="/index/images/player/play1.png"></span>
		 			<span id="tracktime">00:00</span>
		 			<progress id="progress" value="0" min="0">
						<span id="progress-bar"></span>
					</progress>
					<span class="totaltime" id="totaltime">00:00</span>
		 			<img id="volume-img" class="image" src="/index/images/player/volume_max1.png">
					<!--<img id="mute-img" class="image" src="/index/images/player/volume_mute1.png">-->
					<input id="volume" type="range" min="0" max="100" step="1" value="100">
					

					<!--<input type="range" id="seekbar" value="0">-->
				</div>
				<p id="title">Nu op Ons West Brabant:</p>
				<p id="music_now"></p>
				<a id="logo-a" href="http://onswestbrabant.nl" target="external">
					<img id="logo" src="/index/images/logos/onswestbrabant_logo_trans.png">
				</a>
				<div id="playlist">
		 		<ul id="playlist-ul">
		 			<li>
		 				<a href="http://media1.onswestbrabant.nl:8000/status.xsl" target="external"><img class="icecast" src="/index/images/logos/icecast.png"></a><a id="lia1">Ons West Brabant - Stream 1</a>
		 			</li>
		 			<li>
		 				<a href="http://media2.onswestbrabant.nl:8000/status.xsl" target="external"><img class="icecast" src="/index/images/logos/icecast.png"></a><a id="lia2">Ons West Brabant - Stream 2</a>
		 			</li>

		 		</ul>
		 		</div>
		
		 	</div>
		 	
			<video id="player" src="http://media2.onswestbrabant.nl:8000/OWBLiveMP3" metadata></video>

			<script>	 
				var video = document.getElementById("player");
				document.getElementById("player").addEventListener('timeupdate', 
				function() { 
					var us = parseInt(document.getElementById("player").currentTime % 60);
					var um = parseInt((document.getElementById("player").currentTime / 60) % 60);
    				us = (us >= 10) ? us : "0" + us;
					um = (um >= 10) ? um : "0" + um;
    				document.getElementById("tracktime").innerHTML = um + ':' + us;   
					}
				);
			
				document.getElementById("player").addEventListener('timeupdate',
				function() {
					var progress = document.getElementById('progress');
					var progressBar = document.getElementById('progress-bar');
       				progress.setAttribute('max', video.duration);
        			progress.value = video.currentTime;
       				progressBar.style.width = Math.floor((video.currentTime / video.duration) * 100) + '%';
   				});
		
				//var visSeekbar = document.getElementById("seekbar").style;
				document.getElementById("player").addEventListener("loadedmetadata", 	
					function() { 
					var us = parseInt(document.getElementById("player").duration % 60);
    				var um = parseInt((document.getElementById("player").duration / 60) % 60);
    				us = us || 00 ;
    				um = um || 00 ;
    				us = (us >= 10) ? us : "0" + us;
					um = (um >= 10) ? um : "0" + um;
					var umus = um + ':' + us ;
					if ( umus == "00:00") { umus = "&nbsp;&nbsp;&nbsp;&infin;";}
					//  visSeekbar.visibility = "hidden" } else {visSeekbar.visibility = "visible"};
    				document.getElementById("totaltime").innerHTML = umus ;
 					}
				);
			/*	
				var seekBar = document.getElementById("seekbar");
				seekBar.addEventListener("change", function() {
  				var time = video.duration * (seekBar.value / 100);
 				video.currentTime = time;
				});
			
				video.addEventListener("timeupdate", function() {
 				var value = (100 / video.duration) * video.currentTime;
  				seekBar.value = value;
				});
			
				seekBar.addEventListener("mousedown", function() {
  				video.pause();
				});

				seekBar.addEventListener("mouseup", function() {
 				video.play();
				});
			*/
			/*
			video.addEventListener('dblclick', function(){ 
				 if (video.requestFullscreen) {
                        video.requestFullscreen();
                    }
                    else if (video.msRequestFullscreen) {
                        video.msRequestFullscreen();
                    }
                    else if (video.mozRequestFullScreen) {
                        video.mozRequestFullScreen();
                    }
                    else if (video.webkitRequestFullScreen) {
                        video.webkitRequestFullScreen();
                    }
			});
			*/
			document.getElementById("lia1").addEventListener("click", function() {
				changeContent('http://media1.onswestbrabant.nl:8000/OWBLiveMP3','Ons West Brabant -  Stream 1','/index/images/logos/onswestbrabant_logo_trans.png','200px','80px');
				document.getElementById('player').style.display='none';
				})

			document.getElementById("lia2").addEventListener("click", function() {
				changeContent('http://media2.onswestbrabant.nl:8000/OWBLiveMP3','Ons West Brabant - Stream 2','/index/images/logos/onswestbrabant_logo_trans.png','200px','80px');
				document.getElementById('player').style.display='none';
				})
				
	/*						
				var musicNow = document.getElementById("music_now");
				var nowPlaying = document.getElementById("now_playing");
				var currentlyPlayingSong = nowPlaying.innerText;
				function searchCurrentlyPlaying() {
					var currentlyPlayingSong = nowPlaying.innerText;
					//nowPlaying.style.display="none";
					musicNow.innerHTML = '<a id="now_playing" href="https://duckduckgo.com/?q=' + currentlyPlayingSong + '">' + currentlyPlayingSong + '</a>';
  					
				};
*/
		</script>

	</body>
<html>
