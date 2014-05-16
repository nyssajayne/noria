<!doctype html>
<html>

	<head>

		<meta charset="UTF-8">
	
		<title>Noria</title>
	
		<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
		
		<link type="text/css" href="http://shoesandblues.com/noria/wp-content/themes/noria/skin/jplayer.blue.monday.css" rel="stylesheet" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		
		<script type="text/javascript" src=" <?php echo get_stylesheet_directory_uri(); ?>/js/jquery.jplayer.min.js"></script>
		
		  <script type="text/javascript">
    $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            m4a: "http://www.shoesandblues.com/noria/audio/song1.m4a",
            oga: "http://www.shoesandblues.com/noria/audio/song1.ogg"
          });
        },
        swfPath: "/js",
        supplied: "m4a, oga"
      });
    });
  </script>
	
	</head>

	<body> 
    
    		<header>
    		
    			<div class="container">
        
        		<div id="logo"><a href="http://www.shoesandblues.com/noria">&nbsp;</a></div>
            
                	<nav id="menu">
            
                   		<ul>
                        		<li><a href="http://www.shoesandblues.com/noria/biography">Bio</a></li>
                        		<li>|</li>
                        		<li><a href="http://www.shoesandblues.com/noria/events">Gig Guide</a></li>
                        		<li>|</li>
                        		<li><a href="http://www.shoesandblues.com/noria/archives">News</a></li>
                        		<li>|</li>
                        		<li><a href="http://www.shoesandblues.com/noria/contact">Contact</a></li>
                        		<li>|</li>
                        		<li><a href="http://www.shoesandblues.com/noria/gallery">Gallery</a></li>
                    		</ul>
                
                	</nav>
                	
                	<nav id="social">
                
                		<div id="buttons">
                			<a href="http://www.facebook.com" id="facebook"> </a>
                			<a href="http://www.twitter.com/NoriaLetts" id="twitter"> </a>
                			<a href="http://www.youtube.com/channel/UCFErmlXS-W5qySsmfAPPlaw" id="youtube"> </a>
                		</div>
                
                		<p id="mailinglist"><a href="mailto:norialetts@gmail.com?subject=Add Me to the Mailing List">join mailing list</a></p>
                
                	</nav>
                	
                	</div>
        
		</header>